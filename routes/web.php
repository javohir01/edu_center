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

Route::resource('EduCenter','EduCenterController'); // qara buyerda resource qilingani uchun hamma routelarni yozish shart emas

Route::get('/createstudent','StudentController@index');
Route::post('/createstudent','StudentController@store');

Route::get('/student','StudentController@showindex');


Route::get('/adminpanel/{id}','EduCenterController@show');

Route::get('/educenter/{id}','StudentController@show');

Route::resource('student','StudentController');
Route::delete('Student/{id}','StudentController@destroy')->name('Student.destroy'); // manabuyerda katta harflarni kichik harfga amashtirib chiq
Route::delete('Student','StudentController@update')->name('Student.update'); // shu yerga ham resource qilsak
Route::get('Student/{id}/edit','StudentController@edit');

Route::post('dynamic_dependent/fetch', 'EduCenterController@fetch')->name('dynamicdependent.fetch');