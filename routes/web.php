<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'IndexController@Index');
Route::any('/ses', function () {
    return view('welcome');
});

Route::any('/games', 'GoodsListController@index');
Route::any('/games/{id}', 'GoodsListController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'Admin\\AdminPageController@index');
Route::get('/admin/goods/new', 'Admin\\AdminPageController@newGood');
Route::post('/admin/goods/store', 'Admin\\AdminPageController@GoodStore');
Route::get('/admin/goods/addcategory', 'Admin\\AdminPageController@AddCat');
Route::post('/admin/goods/catstore', 'Admin\\AdminPageController@CatStore');
