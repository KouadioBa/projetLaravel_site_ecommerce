<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\MainController;
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


Route::get('/', 'App\Http\Controllers\Shop\MainController@index');
Route::get('/produit/{id}', 'App\Http\Controllers\Shop\MainController@produit')->name('voir_produit');
Route::get('/categorie', 'App\Http\Controllers\Shop\MainController@viewByCategory');
