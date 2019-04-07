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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/contact-us', 'MessageController@contactus')->name('contact-us.store');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {

    Route::resource('slider','SliderController');
    Route::resource('about','AboutController');
    Route::resource('gcategory','GCategoryController');
    Route::resource('gallery','GalleryController');
    Route::resource('mcategory','MCategoryController');
    Route::resource('menu','MenuController');
    Route::resource('config','SiteConfigController');
    Route::resource('messages','MessageController');

});

