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

Use \App\Competence;

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/skills', 'SkillsController@index')->name('skills.index');

Route::get('/user/add','UsersController@add')->name('add');
Route::get('/user/edit', function() {
      $user = Auth::user();
      $skills = $user->competences;
      $compe = Competence::all();    
  return view('add', compact('user','skills','compe'));
})->name('edit');

Route::post('/user/edit', 'UsersController@add');

Route::get('/user/{id}/delete','UsersController@destroy')->name('destroy');

Route::get('/user', 'UsersController@index')->name('user');