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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies','CompaniesController');

//the below route means that the id is optional, this id is the value of the company id of the created project
Route::get('projects/create/{company_id?}','ProjectsController@create');
Route::resource('projects','ProjectsController');

Route::resource('roles','RolesController');
Route::resource('tasks','TasksController');
Route::resource('users','UsersController');
Route::resource('comments','CommentsController');