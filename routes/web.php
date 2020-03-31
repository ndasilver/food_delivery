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
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/cart', function () {
    return view('public.cart');
})->name('cart');


//--------------------------------------------------


Route::get('admin','AdminController@index');
Auth::routes();

Route::resource('admin/categories', 'CategoryController')->names([
    'store' => 'categories.store'
]);
