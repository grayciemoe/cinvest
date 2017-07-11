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

Route::get('/', 'OpportunityController@index');
Route::get('/opportunity/create', 'OpportunityController@create');
Route::post('/opportunity/post','OpportunityController@store');

Route::get('/industry/create', 'IndustryController@create');
Route::post('/industry/post', 'IndustryController@store');
Route::get('/industry/{industry}', 'IndustryController@show');
Route::get('/industry/{industry}/stats', 'IndustryController@stats');
//Route::get('/industry', 'IndustryController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

