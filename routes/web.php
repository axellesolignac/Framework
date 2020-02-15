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
use \App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/skills', 'SkillsController@index')->name('skills');

Route::get('/admin/add','AdminController@add')->name('admin_add');
Route::get('/admin/adding', function() {
      $user = Auth::user();
      $skills = $user->competences;
      $compe = Competence::all();    
  return view('add', compact('user','skills','compe'));
})->name('admin_adding');
Route::post('/admin/adding', 'AdminController@add');

Route::get('/admin/{id}/delete','AdminController@destroy')->name('admin_destroy');

Route::get('admin/edit','AdminController@edit')->name('admin_edit');
Route::get('/admin/editing', function() {
      $user = Auth::user();
      $skills = $user->competences;
      $compe = Competence::all();    
  return view('edit', compact('user','skills','compe'));
})->name('admin_editing');
Route::post('/admin/editing', 'AdminController@edit');

Route::get('/admin/logout', function () {
    return view('logout_admin');
});

Route::get('/admin' ,'AdminController@index')->name('admin');




Route::get('/liste_comp', function() {
    $user = User::all();
    return view('liste_comp', compact('user'));
    });

Route::get('/user/add','UsersController@add')->name('add');
Route::get('/user/adding', function() {
      $user = Auth::user();
      $skills = $user->competences;
      $compe = Competence::all();    
  return view('add', compact('user','skills','compe'));
})->name('adding');
Route::post('/user/adding', 'UsersController@add');

Route::get('/user/{id}/delete','UsersController@destroy')->name('destroy');

Route::get('user/edit','UsersController@edit')->name('edit');
Route::get('/user/editing', function() {
      $user = Auth::user();
      $skills = $user->competences;
      $compe = Competence::all();    
  return view('edit', compact('user','skills','compe'));
})->name('editing');
Route::post('/user/editing', 'UsersController@edit');

Route::get('/user', 'UsersController@index')->name('user');