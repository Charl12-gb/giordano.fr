<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function accueil(){

        $produit = Produit::all();
        return view('content.accueil',[
            'produits' => $produit
        ]);
    }

    public function show( $id_produit ){
        $produit = Produit::where( 'id_produit', $id_produit )->firstOrFail();
        return view('content.show',[
            'produit' => $produit
        ]);
    }
}
