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

Route::get('/', 'FrontEndController@index')->name('index');

Route::get('/post/{slug}', 'FrontEndController@singlePost')->name('post.single');

Auth::routes();


Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    //Settings
    Route::get('/settings', 'SettingsController@index')->name('settings');

    Route::post('/setting/update', 'SettingsController@update')->name('setting.update');

    //User
    Route::get('/users', 'UsersController@index')->name('users');

    Route::get('/user/create', 'UsersController@create')->name('user.create')->middleware('admin');

    Route::post('/user/store', 'UsersController@store')->name('user.store');

    Route::get('/user.admin/{id}', 'UsersController@admin')->name('user.admin');

    Route::get('/user.not-admin/{id}', 'UsersController@not_admin')->name('user.not.admin');

    Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');

    //Profile
    Route::get('/user/profile', 'ProfilesController@index')->name('user.profile');

    Route::post('/user/profile/update', 'ProfilesController@update')->name('user.profile.update');

    //Tag
    Route::get('/tags', 'TagsController@index')->name('tags');

    Route::get('/tag/create', 'TagsController@create')->name('tag.create');

    Route::post('/tag/store', 'TagsController@store')->name('tag.store');

    Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');

    Route::post('/tag/update/{id}', 'TagsController@update')->name('tag.update');

    Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');

    // Posts
    Route::get('/post/create', 'PostsController@create')->name('post.create');

    Route::post('/post/store', 'PostsController@store')->name('post.store');

    Route::get('/posts', 'PostsController@index')->name('posts');

    Route::get('/posts/edit/{id}', 'PostsController@edit')->name('post.edit');

    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');
    // fetch data trash
    Route::get('/posts/trashed', 'PostsController@trashed')->name('posts.trashed');

    Route::get('/posts/delete/{id}', 'PostsController@destroy')->name('post.delete');

    Route::get('/posts/kill/{id}', 'PostsController@kill')->name('post.kill');

    Route::get('/posts/restore/{id}', 'PostsController@restore')->name('post.restore');
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
