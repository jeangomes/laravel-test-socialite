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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/callback/{provider}', 'SocialAuthController@callback');
Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('auth/logout', 'SocialAuthController@logout');

Route::get('/coisa', 'CoisaController@index')->name('coisa');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
