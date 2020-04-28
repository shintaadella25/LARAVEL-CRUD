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

Route::get('/web/index.html', function () {
    return view('profil');
});

Route::get('/children','ChildrenController@index');
Route::get('/children/create','ChildrenController@create');
Route::get('/children/{children}','ChildrenController@show');
Route::post('/children','ChildrenController@store');
route::delete('/children/{children}','ChildrenController@destroy');
route::get('/children/{children}/edit','ChildrenController@edit');
route::patch('/children/{children}','ChildrenController@update');
