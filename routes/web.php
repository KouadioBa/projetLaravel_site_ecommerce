<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/',"Shop\MainController@index");

Route::get('/', function () {

    // SELECT * FROM produits;
    $produits = App\Models\Produit::all();
    // dd($produits);
    
    return view('Shop.index', compact('produits'));
});

Auth::routes();

Route::get('/home', 'Shop/MainController@index');

