<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Seo;
use App\Models\Addon;

class HomeController extends Controller
{
    /**
     * All Product Function For Customer  
    **/
    public function index(){
        $products = Product::latest()->get();
        return view('customer.product.products',compact('products'));
    }

    /**
     * Single Product Function For Customer 
    **/
    public function singleProduct(Seo $seo){
        if(isset($seo)){
            $product = $seo->product[0];
            return view('customer.product.single_product_page',compact('product'));
        }

    }


    /**
     * Product Price Change By Ajax function
    **/
    public function fetchPrice($id){
        $price = Addon::select('price')->where('id',$id)->first();
        return $price->price;
    }
}
