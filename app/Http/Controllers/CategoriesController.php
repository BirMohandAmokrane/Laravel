<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Sécurité : cotrôle des champs
        
        $request->validate(["name" => "required|max:45|unique:categories"]);

        //insertion dans la base de données

        Category::create($request->all());

        // redirection vers la liste des categorie avec l'envoi du message de succé
        // "WITH" envoi des variables sous forme de session fkash
        return redirect()->route('categories.index')->with('message', 'une nouvelle Catégorie est ajoutée avec succé!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(["name" => "required|max:45|unique:categories"]);

        $category->update($request->all());

        return redirect()->route('categories.index',compact('category'))->with('message', "la catégorie est mise à jour avec succé!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
      
        $category->delete();
        return redirect()->route('categories.index')->with("message", "une Categorie est supprimée avec succé!");
    }
}
