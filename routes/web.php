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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/photos/{id}/detail', 'PhotoDetailController@index')->name('photo_detail');
Route::get('/photos/{id}/download', 'DownloadPhotoController@index')->name('photo_download');
Route::get('/infos', 'InfoListController@index')->name('info_list');
Route::get('/infos/{id}/detail', 'InfoDetailController@index')->name('info_detail');
Route::get('/photos/{tag}/{period?}', 'PhotoListController@index')->name('photo_list');
Route::post('/photos', 'PhotoListController@search')->name('search_photo_list');
Route::get('/tags', 'TagListController@index')->name('tag_list');
Route::get('/about', 'AboutWebsiteController@index')->name('about_website');
