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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/photos/{id}/detail', 'PhotoDetailController@index')->name('photo_detail');
Route::get('/photos/{id}/download', 'DownloadPhotoController@index')->name('photo_download');
Route::get('/infos', 'InfoListController@index')->name('info_list');
Route::get('/infos/{id}/detail', 'InfoDetailController@index')->name('info_detail');
Route::get('/photos/{tag?}/{period?}', 'PhotoListController@index')->name('photo_list');
Route::post('/photos', 'PhotoListController@search')->name('search_photo_list');
Route::get('/tags', 'TagListController@index')->name('tag_list');
Route::get('/about', 'AboutWebsiteController@index')->name('about_website');

// 管理画面
Route::get('/admin8fjdodifejf5nl2uhf/home', 'Admin\AdminHomeController@index')->name('admin_home');
Route::get('/admin8fjdodifejf5nl2uhf/photo/home', 'Admin\AdminUploadPhotoController@index')->name('admin_photo_home');
Route::post('/admin8fjdodifejf5nl2uhf/photo/upload', 'Admin\AdminUploadPhotoController@create')->name('admin_photo_update');
Route::get('/admin8fjdodifejf5nl2uhf/info/home', 'Admin\AdminUploadInfoController@index')->name('admin_info_home');
Route::post('/admin8fjdodifejf5nl2uhf/info/upload', 'Admin\AdminUploadInfoController@create')->name('admin_info_update');
