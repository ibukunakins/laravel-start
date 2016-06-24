<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/checkout', function () {
    return view('payment');
});
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment_complete', 'PaymentController@handleGatewayCallback');

Route::auth();
Route::get('/home', 'HomeController@index');
