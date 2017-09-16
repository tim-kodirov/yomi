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



Route::get('/', 'PagesController@getIndex')->name('main');

//news
Route::get('/news/{id}', 'PagesController@getNews')->name('news')->where('id', '[{0,1}?]');
Route::get('/news/{slug}', 'PagesController@getSingleNews')->where('slug', '[\w\d\-\_]+')->name('news.single');

//date
Route::get('/date', 'PagesController@getDate');
Route::get('/events', 'PagesController@getEvents');

//documents
Route::get('/documents', 'PagesController@getDocuments')->name('documents');
//department
Route::get('/department/{id}', 'PagesController@getDepartment')->name('department')->where('id', '[1-5]+');

//functions
Route::get('/expert/{id}', 'PagesController@getExpert')->name('expert')->where('id', '[1-2]+');


Route::get('/wanted/{id}', 'PagesController@getWanted')->name('wanted')->where('id', '[{0,1}?]');

//symbols
Route::get('/symbols', 'PagesController@getSymbols')->name('symbols');

//questions
Route::get('/questions', 'PagesController@getQuestions')->name('questions');

//gallery
Route::get('/gallery/{id}', 'PagesController@getGallery')->name('gallery')->where('id', '[{0,1}?]');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//change language
Route::post('/lang', 'PagesController@setLanguage')->name('lang');

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

	//wanted resource
	Route::resource('wanted', 'Auth\WantedController');
	
	//questions resource
	Route::post('questions/answer/{id}', 'Auth\QuestionsController@setAnswer')->name('questions.answer');
 	Route::resource('questions', 'Auth\QuestionsController');
 	
 	Route::resource('managers', 'Auth\ManagersController');
 	
	Route::get('/', 'Auth\AdminController@index');
});