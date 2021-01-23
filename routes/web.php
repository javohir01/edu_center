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
Route::get('/','HomeController@index')->name('home');
Route::get('/adminpanel','EduCenterController@adminpanel');
Route::get('/educenter','EduCenterController@index');


Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store'); // mana post metodli login
Route::get('/logout','SessionsController@destroy');

Route::get('/createcenter','EduCenterController@CreateCenter');
Route::post('/createcenter','EduCenterController@store');

Route::get('/adminpanel/{id}','EduCenterController@show');