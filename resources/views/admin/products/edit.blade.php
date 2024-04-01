@extends('admin.layouts.template')

@section('titre')
    <h1>Modifier un Produit</h1>
@endsection

<!--@section('table')
    Produits
@endsection-->

@section('contenu')

    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Modifier un Produit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form id="quickForm" method="POST" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- nom -->
            <div class="card-body">
                <div class="form-group">
                <label for="name">Nom </label>
                <input type="text" name="name"  value="{{$product->name}}" class="form-control @error('name') border-danger @enderror" id="name" placeholder="Enter le nom du produit">
                @error('name')
                  <div class="text-danger"> {{ $message }}</div>  
                @enderror
                </div>
            </div>
        <!-- discription -->
            <div class="card-body">
                <div class="form-group">
                    <label for="description">Déscription </label>
                    <textarea name="description"  class="form-control @error('description') border-danger @enderror" id="description" placeholder="Enter la déscription du produit">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="text-danger"> {{ $message }}</div>
                    @enderror
                </div>
            </div>
        <!-- price -->
            <div class="card-body">
                <div class="form-group">
                <label for="price">Prix </label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control @error('price') border-danger @enderror"  id="price" placeholder="Enter le prix" step="0.01" min="0.01"  >
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
        <!-- photo1 -->
            <div class="card-body">
                <img src="{{ asset(' images/products/'. $product->photo1)}}" width="80" >
                <div class="form-group">
                <label for="photo1">Photo 1 </label>
                <input type="file" name="photo1" class="form-control @error('photo1') border-danger @enderror" id="photo1" placeholder="Enter le premiere photo"  value="{{ old('photo1') }}">
                @error('photo1')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
        <!-- photo2 -->
            <div class="card-body">
                <img src="{{ asset(' images/products/'. $product->photo2)}}" width="80" >
                <div class="form-group">
                <label for="photo2">Photo 2 </label>
                <input type="file" name="photo2" class="form-control @error('price') border-danger @enderror" id="price" placeholder="Enter la deuxieme photo"  value="{{ old('photo2') }}">
                @error('photo2')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
        <!-- category_id-->
            <div class="card-body">
                <div class="form-group">
                    <label for="categories">Catégorie</label>
                    <select name="category_id" id="categories" class="form-control @error('category_id') border-danger @enderror" >
                        <option value="" >Selctionner une catégorie</option>
                        @foreach ($categories as $category)

                            <option value="{{$category->id }}" @if ($category->id == $product->category_id) selected @endif >{{$category->name}}</option>
                            
                        @endforeach
                       
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <button type="reset" class="btn btn-secondary">Annuler</button>
        </div>
        </form>
    </div>
@endsection