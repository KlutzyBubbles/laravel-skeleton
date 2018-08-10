<?php

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');

Route::get('/categories', 'PagesController@categories');

Route::get('/movies', 'PagesController@movies');

Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::get('/register', 'UserController@register');
