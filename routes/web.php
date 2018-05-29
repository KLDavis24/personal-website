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

Route::get('/', 'PersonalController@index');
Route::get('contact', 'PersonalController@contact');
Route::get('about', 'PersonalController@about');
Route::get('portfolio', 'PersonalController@portfolio');
Route::get('privacy-policy', 'PersonalController@privacy');
Route::get('send-email', 'PersonalController@processForm')->name('send-contact');
