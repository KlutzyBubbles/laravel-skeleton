<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/pages/about', 'PagesController@about')->name('pages.about');
Route::get('/pages', 'PagesController@index')->name('pages.index');

// Add logout route to allow user to logout with GET request, default only allows POST
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();
