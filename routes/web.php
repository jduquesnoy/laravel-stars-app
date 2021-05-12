<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarController;
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

// route de l'app visible par les visiteurs
Route::get('/', [StarController::class, 'indexVisitor']);

//routes du Crud pour l'admin
Route::resource('stars', StarController::class)->middleware('auth');;

//routes d'authentification  bloquées à la creation de nouveau compte
Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
