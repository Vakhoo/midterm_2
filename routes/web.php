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

Route::get('/customer/article/{id}', "CustomerController@index_article")->name("customerid");
Route::get('/customer/index', "CustomerController@index")->name("customerindex");
Route::post('/customer/createcomment', "CustomerController@comment")->name("createcomment");
Route::post('/customer/search', "CustomerController@search")->name("customersearch");
Route::get('/', function(){
	return view("welcome");
});

Route::get("admin/index", "AdminController@index")->name("adminindex");
Route::get("admin/create", "AdminController@create")->name("admincreate");
Route::post("admin/store", "AdminController@store")->name("adminstore");
Route::get("admin/show", "AdminController@show")->name("adminshow");
Route::post("admin/delete", "AdminController@destroy")->name("admindelete");
Route::post("admin/update", "AdminController@update")->name("adminupdate");

Route::get("admin/newstype/index", "NewsTypeController@index")->name("newstypeindex");
Route::get("admin/newstype/create", "NewsTypeController@create")->name("newstypecreate");
Route::post("admin/newstype/store", "NewsTypeController@store")->name("newstypestore");
Route::get("admin/newstype/show", "NewsTypeController@show")->name("newstypeshow");
Route::post("admin/newstype/delete", "NewsTypeController@destroy")->name("newstypedelete");
Route::post("admin/newstype/update", "NewsTypeController@update")->name("newstypeupdate");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
