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

Route::resource('/', 'AaryaTechcontroller');
Route::get('aboutus', 'AaryaTechcontroller@aboutus');
Route::get('companies', 'AaryaTechcontroller@companies');
Route::get('contact', 'AaryaTechcontroller@contact');
Route::post('secureadmin/login', 'admincontroller@login');
Route::get('secureadmin/logout', 'admincontroller@logout');
Route::resource('secureadmin/contactus', 'ContactUsController');
Route::resource('secureadmin', 'admincontroller');




