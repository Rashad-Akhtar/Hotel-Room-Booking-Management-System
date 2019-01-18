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

// Route::get('/hotel_details_front', function () {
//     return view('front.cart');
// });

Route::get('/','FrontController@index')->name('front.index');
Route::get('/hotel/details/{id}','FrontController@hotel_details')->name('front.hotel_details');

Route::get('/front/login','FrontController@login')->name('front.login');
Route::post('/user/login','Auth\LoginController@login')->name('user.login');

Route::get('/user/register','Auth\RegisterController@showRegistrationForm')->name('front.registerform');
Route::post('/user/register','Auth\RegisterController@register')->name('user.register');

Route::middleware('checkbooking')->group(function(){
Route::get('cart','CartController@showCart')->name('cart.show');
Route::post('cart','CartController@addToCart')->name('cart.add');
Route::post('cart/remove','CartController@remove')->name('cart.remove');
Route::get('cart/clear','CartController@clearcart')->name('cart.clear');
Route::get('checkout','CartController@checkout')->name('checkout');
});


Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.loginform');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login');

Route::prefix('admin')->middleware('auth:admin')->group( function(){

    Route::get('logout','Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('dashboard','AdminController@index')->name('admin.index');
    Route::get('hotels','AdminController@hotels')->name('admin.hotels');
    Route::post('hotel/add','HotelController@hotel_add')->name('hotel_add');
    Route::get('hotels/update/{id}','AdminController@hotels_update')->name('admin.hotels_update');
    Route::post('hotels/update','HotelController@hotel_update')->name('hotel.update');
    Route::get('hotels/delete/{id}','HotelController@hotel_delete')->name('admin.hotels_delete');
    Route::get('orders','OrderController@index')->name('admin.orders');
    Route::get('order_details/{id}','OrderController@order_details')->name('admin.order_details');
    Route::get('order_delete/{id}','OrderController@order_delete')->name('admin.order_delete');
    Route::get('order_approve/{id}','OrderController@order_approve')->name('admin.order_approve');
    Route::get('approved_orders','OrderController@approved_orders')->name('admin.approved_orders');
});


Route::prefix('user')->middleware('auth:web')->group( function(){

    Route::get('logout','Auth\LoginController@userlogout')->name('user.logout');
    Route::post('order','CartController@order')->name('order');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
