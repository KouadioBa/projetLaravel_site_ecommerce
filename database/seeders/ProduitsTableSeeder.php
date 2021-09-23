<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt Star Trek";
        $produit->prix_ht = 39;
        $produit->description = "T-Shirt du film Goonies";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt M. Happy";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film autres1";
        $produit->photo_principale = "super_man.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt M. Cedric";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film autres2";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt M. Junior";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film autres3";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt M. Franck";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film autres4";
        $produit->photo_principale = "super_man.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt Ange";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film autres5";
        $produit->photo_principale = "goonies.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt M. Eric";
        $produit->prix_ht = 39;
        $produit->description = "T-Shirt du film autres6";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-Shirt M. Kouadio";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film autres7";
        $produit->photo_principale = "super_man.jpg";
        $produit->save();
    }
}