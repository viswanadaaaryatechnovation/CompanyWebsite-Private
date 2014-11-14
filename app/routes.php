<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::resource('/', 'AaryaTechcontroller');

//Route::get('aboutus', 'AaryaTechcontroller@aboutus');
//Route::get('companies', 'AaryaTechcontroller@companies');
//Route::get('contact', 'AaryaTechcontroller@contact');

Route::post('store', 'AaryaTechController@store');
Route::post('subsribe','AaryaTechController@subsribe');
Route::post('secureadmin/login', 'AdminController@login');
Route::get('secureadmin/logout', 'AdminController@logout');
Route::resource('secureadmin/contactus', 'ContactUsController');
Route::resource('secureadmin/pages', 'PagesController');
Route::resource('secureadmin/metafields', 'MetaFieldsController');
Route::resource('secureadmin/screens', 'ScreenController');
Route::resource('secureadmin/posts', 'PostsController');
Route::resource('secureadmin/resources', 'ResourcesController');
Route::resource('secureadmin/subscribers', 'SubscribersController');
Route::resource('secureadmin', 'AdminController');
Route::get('/', array('as' => 'page.show', 'uses' => 'AaryaTechController@show'));
Route::get('/{page}', array('as' => 'page.show', 'uses' => 'AaryaTechController@show'));
Route::get('/{page}/{id}', array('as' => 'page.show', 'uses' => 'AaryaTechController@show'));



