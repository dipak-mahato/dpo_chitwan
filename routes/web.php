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

 
Route::get('/dash', function () {
    return view('dash');
});
Route::get('/newdash', 'DashController@index');

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_home','DashController@admin');
Route::get('/notice','NoticeController@show');

Route::get('/notice/delete/{id}','NoticeController@destroy');
Route::post('/addNotice','NoticeController@store');
Route::patch('/editNotice','NoticeController@edit');
Route::patch('/editService','CititzenController@editService');

Route::get('/services','DashController@services');
Route::post('/addService','CititzenController@addservice');

Route::get('/iv_slider','DashController@iv_slider');

Route::get('/footer','FooterController@index');
Route::post('/addFooter','FooterController@addfooter');
Route::patch('/editFooter','FooterController@editfooter');
Route::get('/footer/delete/{id}','FooterController@destroy');


Route::get('/slider','SliderController@index');
Route::post('/addSlider','SliderController@store');
Route::get('/slider/delete/{id}','SliderController@destroy');
