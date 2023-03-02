<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|------------------------------------------------------------------------
| Customer Routes
|------------------------------------------------------------------------
*/
Route::controller(HomeController::class)->group(function(){
    Route::get('/' , 'index')->name('index');
    Route::get('product/{seo?}' , 'singleProduct')->name('product');

    /* Ajax Route */
    Route::get('fetch-price/{id?}','fetchPrice')->name('fetch-price');
});


/*
|------------------------------------------------------------------------
| Admin Routes
|------------------------------------------------------------------------
*/
Route::controller(AdminController::class)->prefix('admin')->name('admin-')->group(function(){
    Route::match(['get','post'],'login' , 'login')->name('login');
    /*
    |------------------------------------------------------------------------
    | Admin Auth or Middelware Routes
    |------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('dashboard' , 'index')->name('dashboard');
        Route::get('logout' , 'logout')->name('logout');


        /* Admin  Product Route */
        Route::get('products' , 'productList')->name('products');
        Route::match(['get','post'],'create-product' , 'productCreate')->name('create-product');
        Route::match(['get','post'],'product-edit/{seo?}' , 'productEdit')->name('product-edit');
        Route::get('product-delete/{id?}' , 'productDelete')->name('product-delete');

        
        /* Admin  Addons Route */
        Route::get('addons' , 'addonsList')->name('addons');
        Route::get('addons-delete/{id?}' , 'addonsDelete')->name('addons-delete');
        Route::match(['get','post'],'create-addons' , 'addonsCreate')->name('create-addons');
        Route::match(['get','post'],'edit-addons/{id?}' , 'addonsEdit')->name('edit-addons');


        /* Admin  Addons Category Route */
        Route::get('delete-category-addons/{id?}' , 'addonsCategoryDelete')->name('delete-category-addons');
        Route::match(['get','post'],'addons-category' , 'addonsCategoryList')->name('addons-category');
        Route::match(['get','post'],'create-addons-category' , 'addonsCategoryCreate')->name('create-addons-category');
        Route::match(['get','post'],'edit-category-addons/{id?}' , 'addonsCategoryEdit')->name('edit-category-addons');

    });
});


