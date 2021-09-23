<?php

namespace App\Http\Controllers\Shop;

use App\Models\Category;
use App\Models\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        // SELECT * FROM produits;

        $produits = Produit::all();
        $categories = Category::where('is_online',1)->get();


        // dd($produits);

        return view('Shop.index', compact('produits', 'categories'));
    }

    public function produit(Request $request){

      // dd($request->id);
      $categories = Category::where('is_online',1)->get();
      $produit = Produit::find($request->id);


      return view('Shop.produit', compact('produit', 'categories'));
    }

    public function viewByCategory(){

      // Récupération des catégories >> is_online == 1
      // $categories = Category::where('is_online',1)->get();
      // dd($categories);


      return view('Shop.categorie');
    }
}   

