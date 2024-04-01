<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // cette methode a pour rôle protéger le controlleure afin de protéger les routes , et donc l'accès
    public function __construct(){
        $this->middleware('auth');
    }
    
        
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //sécurité : contrôle des champs
        $request->validate([
            "name"=> "required|max:50|unique:products",
            "description"=> "required|max:150",
            "price"=> "required|numeric",
            "photo1"=> "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "photo2"=> "required|image|mimes:jpeg,png,jpg,gif|max:2048",
            "category_id"=>"required|numeric"
        ]);
        //Traiter les photo

        $inputs=$request->all();
        if($photo1=$request->file("photo1")){
            $newfile1=time().".".$photo1->getClientOriginalExtension();
            $photo1->move('images/products/',$newfile1);
            $inputs['photo1']=$newfile1;
        }
 
        if($photo2=$request->file("photo2")){
            $newfile2=time().time().".".$photo2->getClientOriginalExtension();
            $photo2->move('images/products/',$newfile2);
            $inputs['photo2']=$newfile2;
        }

        //Insersion dans la base de données
        Product::create($inputs);
        return redirect()->route('products.index')->with('message','un nouveau Produit est ajouté avec succé!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {   
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            "name"=> "required|max:50",
            "description"=> "required|max:150",
            "price"=> "required|numeric",
            "photo1"=> "image|mimes:jpeg,png,jpg,gif|max:2048",
            "photo2"=> "image|mimes:jpeg,png,jpg,gif|max:2048",
            "category_id"=>"required|numeric"
        ]);

        //Traiter les photo

        $inputs=$request->all();

        if($photo1=$request->file("photo1")){
            $newfile1=time().".".$photo1->getClientOriginalExtension();

            // ecraser l'ancienne photo1
            if(file_exists("images/products/". $product->photo1)){
                unlink("images/products/". $product->photo1);
            }
            $photo1->move('images/products/',$newfile1);
            $inputs['photo1']=$newfile1;
        }
 
        if($photo2=$request->file("photo2")){
            $newfile2=time().time().".".$photo2->getClientOriginalExtension();

            // ecraser l'ancienne photo2
            if(file_exists("images/products/". $product->photo2)){
                unlink("images/products/". $product->photo2);
            }
            $photo2->move('images/products/',$newfile2);
            $inputs['photo2']=$newfile2;
        }
        
        $product->update($inputs);

        return redirect()->route('products.index',compact('product'))->with('message', "le Produit est modifié avec succé!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //supprimer les images dans le dossier image/products
        if(file_exists("images/products/". $product->photo1)){
            unlink("images/products/". $product->photo1);
        }
        
        if(file_exists("images/products/". $product->photo2)){
            unlink("images/products/". $product->photo2);
        }
       
        $product->delete();
        return redirect()->route('products.index')->with('message', 'le Produit est supprimée avec succès');
       
    }
}
