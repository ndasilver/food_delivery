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

use App\Http\Controllers\ConfigurationController;

Route::get('/', 'PublicController@index')->name('home');
Route::get('/cart', 'PublicController@cart')->name('cart');
Route::get('/add-to-cart/{id}/{quantity}/side/{side_dish}', 'PublicController@addToCart')->name('AddToCart');
Route::get('/cart-items-cart', 'PublicController@getCart')->name('get.Cart');
Route::post('/order', 'OrderController@store')->name('checkout.Cart');
Route::get('/category/{id}', 'PublicController@category')->name('category');
Route::get('/checkout', 'PublicController@checkout')->name('checkout');
Route::get('/categories', 'PublicController@categories')->name('categories');
Route::get('/checkout/successful/{order}', 'PublicController@checkoutSuccess')->name('checkout.successful');
Route::post('/submit/review', 'PublicController@store_review')->name('submit.review');
Route::get('/submitted/review', 'PublicController@submitted_review')->name('review.submitted');

Route::get('/getMenuInfo/{id}', 'PublicController@getMenuInfo')->name('getMenuInfo');
Route::group(['middleware' => 'cors'], function () {

});



//--------------------------------------------------

Auth::routes();
Route::middleware(['auth'])->group(function (){
    Route::get('admin','AdminController@index')->name('Admin.Dashboard');
    Route::get('admin/order/approve/{id}','OrderController@approve')->name('order.approve');
    Route::get('admin/order/reject/{id}','OrderController@reject')->name('order.reject');
    Route::get('users/activate/{id}','UsersController@activate')->name('user.activate');
    Route::get('users/deactivate/{id}','UsersController@deactivate')->name('user.deactivate');
    Route::resource('admin/menu','MenuController');
    Route::resource('admin/orders','OrderController');
//    Route::resource('admin/settings', 'ConfigurationController');

    Route::get('admin/settings', 'ConfigurationController@index')->name('settings.index');
    Route::post('admin/settings/edit/name/{id}', 'ConfigurationController@editName')->name('edit.name');
    Route::post('admin/settings/edit/terms/{id}', 'ConfigurationController@editTerms')->name('edit.terms');
    Route::post('admin/settings/edit/sms/{id}', 'ConfigurationController@editSms')->name('edit.sms');
    Route::post('admin/settings/edit/email/{id}', 'ConfigurationController@editEmail')->name('edit.email');
    Route::post('admin/settings/edit/logo/{id}', 'ConfigurationController@editLogo')->name('edit.logo');
    Route::post('admin/settings/edit/currencySeeder/{id}', 'ConfigurationController@editCurrency')->name('edit.currencySeeder');
    Route::get('admin/settings/payment','PaymentController@index')->name('settings.payment');
    Route::get('admin/setting/users','UsersController@index')->name('users.list');
    Route::post('admin/setting/users','UsersController@update')->name('users.update');
    Route::get('admin/setting/users/edit/{id}','UsersController@edit')->name('users.edit');
    Route::get('register','UsersController@showRegistrationForm')->name('register');
    Route::post('register','UsersController@userCreate')->name('user.create');
    Route::get('admin/setting/payment/charge/{price}','PaymentController@charge')->name('payment.charge');
//Route::post('admin/menu','MenuController@store')->name('Admin Create menu item');
    Route::resource('admin/categories', 'CategoryController')->names([
        'store' => 'categories.store',
        'edit' => 'categories.edit',
        'index' => 'categories.index'
    ]);
});
