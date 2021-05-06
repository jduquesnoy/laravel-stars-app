<?php

use Illuminate\Support\Facades\Route;

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

//index
Route::get('stars', 'StarsController@index')->name('stars.index');

//create form loading
Route::get('stars/create', 'StarsController@create')->name('stars.create');

//create
Route::post('stars', 'StarsController@store')->name('stars.store');

//show
Route::get('stars/{star}', 'StarsController@show')->name('stars.show');

//update form loading
Route::get('stars/{star}/edit', 'StarsController@edit')->name('stars.edit');

//update
Route::put('stars/{star}', 'StarsController@update')->name('stars.update');

//delete
Route::delete('stars/{star}', 'StarsController@destroy')->name('stars.destroy');
