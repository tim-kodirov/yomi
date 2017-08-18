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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
	//photos resource
	Route::resource('photos', 'Auth\PhotosController');

	//videos resource
	Route::resource('videos', 'Auth\VideosController');
	
	//news resource
	Route::resource('news', 'Auth\NewsController');

	//documents resource
	Route::resource('documents', 'Auth\DocumentsController');

	//categories resource
	Route::resource('categories', 'Auth\CategoriesController');
	
	Route::get('/', 'Auth\AdminController@index');
});