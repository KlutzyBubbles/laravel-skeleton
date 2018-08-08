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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/about', 'PagesController@about');

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');

Route::get('/categories', 'CategoriesController@index');

Route::get('/movies', 'MoviesController@index');

Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::get('/register', 'UserController@register');
