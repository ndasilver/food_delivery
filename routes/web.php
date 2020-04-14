<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//--------------- Public Routes -----------------

Route::get('/', 'PublicController@index')->name('home');
Route::get('/cart', 'PublicController@cart')->name('cart');
Route::get('/add-to-cart/{id}/{quantity}', 'PublicController@addToCart')->name('AddToCart');
Route::get('/cart-items-cart', 'PublicController@getCart')->name('get.Cart');
Route::get('/category/{id}', 'PublicController@category')->name('category');
Route::get('/checkout', 'PublicController@checkout')->name('checkout');
Route::get('/categories', 'PublicController@categories')->name('categories');
Route::group(['middleware' => 'cors'], function () {

});



//--------------------------------------------------

Auth::routes();
Route::middleware(['auth'])->group(function (){
    Route::get('admin','AdminController@index')->name('Admin Dashboard');
    Route::resource('admin/menu','MenuController');
    Route::resource('admin/orders','OrderController');
//Route::post('admin/menu','MenuController@store')->name('Admin Create menu item');
    Route::resource('admin/categories', 'CategoryController')->names([
        'store' => 'categories.store',
        'edit' => 'categories.edit',
        'index' => 'categories.index'
    ]);
});
