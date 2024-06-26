<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panierController extends Controller
{   

    public function panier(){

        $products = [];

        $totalPrice = 0;
        $productCount = 0;

        if(!session()->has('panier')) {
            session()->put('panier', []);
            $totalPrice = 0;
            $productCount = 0;
        }
        else {
         $products = session()->get('panier');
         $productCount = count($products);
         foreach ($products as $product){
            $totalPrice += $product['price'] * $product['qty'];
         }
    }
        
        return view('website.panier', compact('products', 'totalPrice', 'productCount'));
    }

    public function delProdPanier($indice){

        $products = session()->get('panier');
        //unset() vide une variable
        unset($products[$indice]);
        // recharger la session avec les nouvelles valeurs
        session()->put('panier', $products );
        return redirect()->back();
    }

    public function clearPanier(){

        session()->put('panier', [] );
        return redirect()->back();
    }

    public function addToCart(Request $request){
        // réccuperer les information du formulaire
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $photo1 = $request->photo1;
        $qty = $request->qty;
        // Ajouter le produit dans la session
        if (!session()->has('panier')) {
            session()->put('panier', []);
        } else {
        session()->push('panier',['id'=>$id, "name"=>$name, "price"=>$price, "photo1"=>$photo1, "qty"=>$qty ]);
        }
        
        return redirect()->back()->with('message', 'un nouveau produit est ajouté au panier avec succé ;)');
        //session()->forget('panier');
        
    }
}

