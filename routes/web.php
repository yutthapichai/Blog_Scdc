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


Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/post/create', 'PostsController@create')->name('post.create');

    // Posts
    Route::post('/post/store', 'PostsController@store')->name('post.store');

    Route::get('/posts', 'PostsController@index')->name('posts');

    Route::get('/posts/edit/{id}', 'PostsController@edit')->name('post.edit');
    // fetch data trash
    Route::get('/posts/trashed', 'PostsController@trashed')->name('posts.trashed');

    Route::get('/posts/delete/{id}', 'PostsController@destroy')->name('post.delete');

    Route::get('/posts/kill/{id}', 'PostsController@kill')->name('post.kill');
    // Categories
    Route::get('/category/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::get('/categories',[
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);

    Route::get('/category/edit/{id}',[
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    
    Route::get('/category/delete/{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);

    Route::post('/category/store',[
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    Route::post('/category/update/{id}',[
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);

});