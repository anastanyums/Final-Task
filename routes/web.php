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

Route::post('/issueBookSubmit', 'BooksIssuedController@index');

Route::put('/editBook/{id}', 'BooksController@update');
Route::get('/booksList', 'BooksController@index');
Route::get('/bookDelete/{id}', 'BooksController@destroy');
Route::get('/editBook/{id}', 'BooksController@show');

Route::get('/assignedIssues', 'assignedIssueController@index');

Route::get('/addBooks', 'BooksController@create');
Route::post('/addBooks', 'BooksController@store');


Route::post('/addIssue', 'IssueController@store');

Route::get('/categoriesList','BooksCategoryController@index');
Route::get('/addCategories', 'BooksCategoryController@create');
Route::post('/addCategories', 'BooksCategoryController@store');

Route::get('/authorsList','AuthorsController@index');
Route::get('/addAuthors', 'AuthorsController@create');
Route::post('/addAuthors', 'AuthorsController@store');

Route::get('/issuedBooks','BooksIssuedController@index');
Route::post('/issueBooks', 'BooksIssuedController@store');
Route::get('/issueBooks', 'BooksIssuedController@create');


Route::get('/membersList', 'MemberController@index');
Route::get('/addMembers',  'MemberController@create');
Route::post('/addMembers', 'MemberController@store');

Route::get('/returnBooks', 'BooksReturnedController@create');
Route::post('/returnBooks', 'BooksReturnedController@store');

Route::get('/thesisList', function () {
    return view('thesisList');
});

Route::get('/logout','Auth\LoginController@logout');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');



