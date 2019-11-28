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

Auth::routes(['register'=> false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/animals', 'AnimalController@index')->name('animals');
Route::get('/animal/show/{id}', 'AnimalController@show')->name('animal.show');

Route::get('/races', 'RaceController@index')->name('races');
Route::get('/race/show/{id}', 'RaceController@show')->name('race.show');

Route::get('/users', 'UserController@index')->name('users');


Route::middleware('auth')->group(function() {
  //Animals routes
  Route::get('/animal/create', 'AnimalController@create')->name('animal.create');
  Route::get('/animal/edit/{id}', 'AnimalController@edit')->name('animal.edit');

  Route::post('/animal/store', 'AnimalController@store')->name('animal.store');
  Route::post('/animal/update', 'AnimalController@update')->name('animal.update');
  Route::post('/animal/delete', 'AnimalController@destroy')->name('animal.delete');


  //Races routes
  Route::get('/race/edit/{id}', 'RaceController@edit')->name('race.edit');
  Route::get('/race/create', 'RaceController@create')->name('race.create');

  Route::post('/race/store', 'RaceController@store')->name('race.store');
  Route::post('/race/update', 'RaceController@update')->name('race.update');
  Route::post('/race/delete', 'RaceController@destroy')->name('race.delete');

  //Users routes
  Route::get('/user/create', 'UserController@create')->name('user.create');
  Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');

  Route::post('/user/store', 'UserController@store')->name('user.store');
  Route::post('/user/update', 'UserController@update')->name('user.update');
  Route::post('/user/delete', 'UserController@destroy')->name('user.delete');

});
