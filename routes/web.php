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

Route::get('/', 'ProjectController@index')->name('index');
Route::get('/destroy/{id}', 'ProjectController@destroy')->where('id', '[0-9]+');

Route::get('/download', 'HomeController@getDownload');

Route::resource('/project', 'ProjectController');

Route::get('/phpinfo/public', function() {
    return public_path();
    
});
Route::get('/phpinfo/url', function() {
    return url();
    
});
