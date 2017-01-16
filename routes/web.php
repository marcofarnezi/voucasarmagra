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


Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@postLogin');


Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('index');
});

Route::get('/', ['as' =>'index.index', 'uses' => 'IndexController@index']);
Route::post('/mail', ['as' => 'index.mail', 'uses' => 'IndexController@postContato']);
Route::get('/post/{id}', ['as' =>'index.show', 'uses' => 'IndexController@show']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('', ['as' =>'admin.posts', 'uses' => 'PostsAdminController@index']);
    Route::group(['prefix' => 'posts'], function() {
        Route::get('', ['as' =>'admin.posts.index', 'uses' => 'PostsAdminController@index']);
        Route::get('create', ['as' => 'admin.posts.create', 'uses' =>'PostsAdminController@create']);
        Route::post('store', ['as' => 'admin.posts.store', 'uses' =>'PostsAdminController@store']);
        Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' =>'PostsAdminController@edit']);
        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' =>'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' =>'PostsAdminController@destroy']);
    });
});

Route::group(['prefix' => 'posts'], function() {
    Route::get('{id}', ['as' =>'posts.categorias', 'uses' => 'PostsController@categorias']);
});