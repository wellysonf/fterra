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

Route::get('/', function () { return redirect('/login'); });
Route::get('/register', function () { return redirect('/login'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('familia','HouseholderController');
Route::resource('familia/membro','FamilyMemberController');
Route::resource('familia/membro/cadsocio','SocioeconomicController');
Route::get('familia/membro/cadsocio/add/{id}','SocioeconomicController@add')->name('cadsocio.add');
Route::get('familia/membro/add/{id}','FamilyMemberController@add')->name('membro.add');

//Route::get('/familia/api','HouseholderController@APIListagem')->name('api_datatable');
