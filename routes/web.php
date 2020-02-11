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

Route::get('/skills/manage', function(){
  if (Gate::check('admin')) {
    $app = app();
    $controller = $app->make('App\Http\Controllers\SkillsController');
  return $controller->callAction('index',[]);
  }else{
    return view('welcome');
  }
});