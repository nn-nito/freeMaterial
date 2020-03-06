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

Route::get('/', function () {
    return view('infoDetail');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/photos/{id}/detail', 'PhotoDetailController@index')->name('photo_detail');
