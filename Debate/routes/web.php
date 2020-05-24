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


Route::get('/', 'TopicController@index')->name('topics');
Route::get('/topics', 'TopicController@index')->name('topics');
Route::get('/discuss', 'DiscussController@index')->name('discuss');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
