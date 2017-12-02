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
include __DIR__.'/admin/admin.php';
include __DIR__.'/home/home.php';
Route::any('/component/upload','Component\\UploadController@upload');
Route::any('/component/filelist','Component\\UploadController@fileList');