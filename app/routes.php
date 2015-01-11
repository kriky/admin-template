<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




// Login i sesija
Route::get('/login', 'SessionController@create');
Route::get('/', 'UsersController@index')->before('auth');
Route::resource('sessions','SessionController');
Route::get('logout','SessionController@destroy');


// CRUD Sati
Route::get('/addhours','UserHoursController@create')->before('auth');
Route::get('/addhours/delete/{id}',['as'=>'hours.delete','uses'=> 'UserHoursController@destroy'])->before('auth');

Route::post('/store','UserHoursController@store')->before('auth');

// Prikaz sati po useru
Route::get('{username}/hours', 'UserHoursController@index')->before('auth');
Route::get('{username}/hours', ['as' =>'user.hours','uses' =>'UserHoursController@index'])->before('auth');

// Report Controller
Route::get('/report','HoursReportController@create');

Route::post('/reportshow', ['as' =>'reportshow','uses' =>'HoursReportController@show'])->before('auth');



////// TESTERI /////

//Testni prikaz sesije
Route::get('show','SessionController@show');




