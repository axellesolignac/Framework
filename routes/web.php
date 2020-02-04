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

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/skills', 'SkillsController@index')->name('skills.index');

Route::get('/skills/{id}/edit','SkillsController@edit')->name('skills.edit');
Route::get('/skills/{id}/delete','SkillsController@destroy')->name('skills.destroy');
Route::get('/create','SkillsController@create')->name('skills.create');
Route::post('/create','SkillsController@store')->name('skills.store');
Route::post('/skills/update','SkillsController@update')->name('skills.update');
