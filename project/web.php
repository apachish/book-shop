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
Route::get('books/{id}/edit', 'BooksController@edit')->name('books.edit');
Route::post('books', 'BooksController@store')->name('books.store');
//Route::put('books/{id}', 'BooksController@update')->name('books.update');
Route::patch('books/{id}', 'BooksController@update')->name('books.update');

Route::get('/categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::get('categories/{id}', 'CategoryController@show');
Route::post('categories', 'CategoryController@store')->name('categories.store');

Route::get('/authors', 'AuthorController@index');
Route::get('authors/create', 'AuthorController@create');
Route::get('authors/{id}', 'AuthorController@show');
Route::post('authors', 'AuthorController@store')->name('authors.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
