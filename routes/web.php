<?php

use Illuminate\Support\Facades\Route;

Route::get('search', 'SearchController@post')->name('search.posts');

Route::group(['middleware' => 'auth'], function () {
    Route::get('posts', 'PostController@index')->name('posts.index')->withoutMiddleware('auth');
    Route::get('posts/create', 'PostController@create')->name('posts.create');
    Route::post('posts/store', 'PostController@store')->name('posts.store');
    Route::get('posts/{post:slug}', 'PostController@show')->name('posts.show')->withoutMiddleware('auth');
    Route::get('posts/{post:slug}/edit', 'PostController@edit')->name('posts.edit');
    Route::patch('posts/{post:slug}/edit', 'PostController@update')->name('posts.update');
    Route::delete('posts/{post:slug}/delete', 'PostController@destroy')->name('posts.destroy');
});

Route::get('categories/{category:slug}', 'CategoryController@show')->name('categories.show');
Route::get('tags/{tag:slug}', 'TagController@show')->name('tags.show');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
