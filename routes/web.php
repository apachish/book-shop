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
Route::get('/books', 'BooksController@index');
Route::get('books/create', 'BooksController@create');
Route::get('books/{id}', 'BooksController@show');
Route::post('books', 'BooksController@store')->name('books.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
