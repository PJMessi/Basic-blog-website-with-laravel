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

Route::get('/', 'pagesController@index');
Route::get('/aboutUs', 'pagesController@aboutUs');



Route::get('/service', 'pagesController@service');

Route::resource('posts', 'postsController');


Auth::routes();

Route::get('/dashboard', 'dashboardController@index');



Route::get('/messages', 'messagesController@index');
Route::post('/messages', 'messagesController@store');

//Route::get('sendMail', 'pagesController@mailIndex');

Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verifyingEmail/{email}/{verifyToken}', 'Auth\RegisterController@verifyingEmail')->name('verifyingEmail');
Route::get('verified/{email}','Auth\RegisterController@verified');

