<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/{user}', 'ProfileController@index');

Route::resource('post', 'PostsController');