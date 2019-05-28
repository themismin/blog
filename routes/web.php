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

Route::get('/', 'HomeController@index');

Route::get('/article/{id}', 'ArticleController@index')->name('article');

Route::get('/category/{id}', 'CategoryController@index')->name('category');

Route::get('/tag/{id}', 'TagController@index')->name('tag');

Route::get('/page/{alias}', 'PageController@index')->name('page.show');

Route::get('/about', 'PageController@about')->name('about');

Route::namespace('Manage')->prefix('manage')->group(function () {

    Route::get('/login', 'AuthController@showLoginForm')->name('manage.login');

    Route::post('/login', 'AuthController@login');

    Route::get('/logout', 'AuthController@logout');

    Route::group(['middleware' => ['auth', 'reject-null-values']], function(){

        Route::get('/', 'HomeController@index')->name('manage.home');

        Route::post('/upload/image', 'UploadController@image');

        Route::resource('article', 'ArticleController', ['as' => 'manage']);

        Route::resource('category', 'CategoryController', ['as' => 'manage']);

        Route::get('category/set-nav/{id}', ['as' => 'manage.category.set-nav', 'uses' => 'CategoryController@setNavigation']);

        Route::resource('user', 'UserController', ['as' => 'manage']);

        Route::resource('tag', 'TagController', ['as' => 'manage']);

        Route::resource('link', 'LinkController', ['as' => 'manage']);

        Route::resource('navigation', 'NavigationController', ['as' => 'manage']);

        Route::resource('page', 'PageController', ['as' => 'manage']);

        Route::get('system', 'SystemController@index')->name('manage.system.index');

        Route::post('system', 'SystemController@store')->name('manage.system.store');
    });
});
