<?php

use Illuminate\Support\Facades\Route;

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
$path = "App\Http\Controllers";

Route::get('/', $path."\PageController@index");
Route::get('/reg', $path."\RegistrationController@index");
Route::get('/register', $path."\RegistrationController@newOrg");
Route::get('/regClient', $path."\RegistrationController@newClient");
Route::post('/regClient', $path.'\RegistrationController@store')->name('regClient');
Route::get('/login', $path.'\LogCon@index');
Route::post('/login', $path."\LogCon@login")->name('login');
Route::get('/logout', $path."\LogCon@logout")->name('logout');
Route::post('/register', $path."\SampleController@storages");
//Route::resource('/', "PageController");