<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Addon;
use App\Models\AddonCategory;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Seo;

class AdminController extends Controller
{
    /**
     * All Admin Function Here
    **/




    /**
     * Login Function For Admin 
    **/
    public function login(Request $request){
        if($request->isMethod('get')){
            return view('admin.auth.login');
        }
        if($request->isMethod('post')){
            
            if(Auth::guard('admin')->attempt(['email'=> $request->email , 'password'=> $request->password])){
                return redirect()->route('admin-dashboard');
            }
            else{
                return back();
            }
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return back();
    }
    
    



    /**
     * Dashboard View Function For Admin 
    **/
    public function index(){
        return view('admin.dashboard');
    }






    /**
     * All Product Function For Admin  Here
    **/
    public function productList(){
        $products = Product::latest()->with('addonsCategoryData')->paginate(10);
        return view('admin.product.product_list',compact('products'));
    }
    public function productCreate(Request $request){
        if($request->isMethod('get')){
            $addonCategories = AddonCategory::latest()->get();
            return view('admin.product.product_create',compact('addonCategories'));
        }
        if($request->isMethod('post')){
            
            $newArray = [];
            foreach($request->addon_category as $addon){
                array_push($newArray, (int)$addon);
            }
            $addons = $newArray;
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'addon_category' => $addons
            ]);
            if($product){
                $product->seo()->attach(Seo::create(['title' => $request->name, 'permalink' => Str::slug($request->name)]));
                if ($request->hasFile('image')) {
                    $imgName = time() . '.' . $request->file('image')->extension();
                    $request->image->move(public_path('product/image/'), $imgName);
                    $product->update([
                        'image' => $imgName
                    ]);
                }
                return back()->with('message' , 'Create Product Successfully');
            }
            else{
                return back()->with('Warning','Something Error Occure...');
            }
        }
    }
    public function productEdit(Request $request , Seo $seo){
        if($request->isMethod('get')){
            $product = $seo->product[0];
            $addonCategories = AddonCategory::latest()->get();
            return view('admin.product.product_edit',compact('product','addonCategories'));
        }
        if($request->isMethod('post')){
            $product = $seo->product[0];
            $newArray = [];
            foreach($request->addon_category as $addon){
                array_push($newArray, (int)$addon);
            }
            $addons = $newArray;
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'addon_category' => $addons
            ]);
            if($product){
                if ($request->hasFile('image')) {
                    $imgName = time() . '.' . $request->file('image')->extension();
                    $request->image->move(public_path('product/image/'), $imgName);
                    $product->update([
                        'image' => $imgName
                    ]);
                }
                return back()->with('message' , 'Update Product Successfully');
            }
            else{
                return back()->with('Warning','Something Error Occure...');
            }
        }

    }
    public function productDelete($id){
        Product::where('id',$id)->delete();
        return back()->with('message','Product Deleted Successfully');
    }






    /**
     * All Addons Function For Admin  Here
    **/
    public function addonsList(){
        $addons = Addon::latest()->paginate(10);
        return view('admin.addons.list',compact('addons'));
    }
    public function addonsCreate(Request $request){
        if($request->isMethod('get')){
            return view('admin.addons.create');
        }
        if($request->isMethod('post')){
    
           $addon =  Addon::create($request->all());
           if($addon){
            return back()->with('message' , 'Create Addon Successfully');
           }
           else{
            return back()->with('Warning','Something Error Occure...');
           }
        }
    }
    public function addonsEdit(Request $request , $id){
        if($request->isMethod('get')){
            $addon =  Addon::where('id',$id)->first();
            return view('admin.addons.edit',compact('addon'));
        }
        if($request->isMethod('post')){
    
           $addon =  Addon::where('id',$id)->update([
            'name' => $request->name,
            'price' => $request->price
           ]);
           if($addon){
            return back()->with('message' , 'Updated Addon Successfully');
           }
           else{
            return back()->with('Warning','Something Error Occure...');
           }
        }
    }
    public function addonsDelete($id){
        Addon::where('id',$id)->delete();
        return back()->with('message' , 'Deleted Addon Successfully');
    }













    /**
     * All Addons Category Function For Admin  Here
    **/
    public function addonsCategoryCreate(Request $request){
        if($request->isMethod('get')){
            $addons = Addon::latest()->get();
            return view('admin.addons_category.create',compact('addons'));
        }
        if($request->isMethod('post')){
            $newArray = [];
            foreach($request->addons as $addon){
                array_push($newArray, (int)$addon);
            }
            $addons = $newArray;
            $AddonCategory =  AddonCategory::create([
              'name'=> $request->name,
              'addons' => $addons
            ]);
           if($AddonCategory){
            return back()->with('message' , 'Create Addon Successfully');
           }
           else{
            return back()->with('Warning','Something Error Occure...');
           }
        }
    }
    public function addonsCategoryList(Request $request){
        if($request->isMethod('get')){
            $addonCategories = AddonCategory::latest()->with('addonsData')->get();
            return view('admin.addons_category.list',compact('addonCategories'));
        }
    }
    public function addonsCategoryDelete($id){
        AddonCategory::where('id',$id)->delete();
        return back()->with('message' , 'Deleted Addon Category Successfully');
    }
    public function addonsCategoryEdit(Request $request , $id){
        if($request->isMethod('get')){
            $addons = Addon::latest()->get();
            $addonCategory = AddonCategory::where('id',$id)->first();
            return view('admin.addons_category.edit',compact('addons','addonCategory'));
        }
        if($request->isMethod('post')){
    
            $newArray = [];
            foreach($request->addons as $addon){
                array_push($newArray, (int)$addon);
            }
            $addons = $newArray;
            $addonCategory = AddonCategory::where('id',$id)->first();
            $addonCategory->update([
              'name'=> $request->name,
              'addons' => $addons
            ]);
           if($addonCategory){
            return back()->with('message' , 'Updated Addon Successfully');
           }
           else{
            return back()->with('Warning','Something Error Occure...');
           }
        }
    }
    
}
