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
Route::get('/','RegistrationController@index');

Route::get('create','RegistrationController@create');
Route::post('create','RegistrationController@store');
Route::get('/registration','RegistrationController@index');
Route::get('/edit/registration/{id}','RegistrationController@edit');
Route::post('/edit/registration/{id}','RegistrationController@update');
Route::delete('/delete/registration/{id}','RegistrationController@destroy');