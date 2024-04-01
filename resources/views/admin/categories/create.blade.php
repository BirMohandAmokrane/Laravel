@extends('admin.layouts.template')

@section('titre')
    <h1>Ajout des Catégories</h1>
@endsection

@section('table')
    Catégories
@endsection

@section('contenu')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter une Catégorie</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" method="POST" action="{{route('categories.store')}}">
      @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="name">Nom </label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') border-danger @enderror" id="name" placeholder="Enter le nom de la catégorie">
            </div>
            @error('name')
             <div class="text text-danger"> {{ $message }}</div>   
            @enderror
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
      </div>
    </form>
  </div>
    
@endsection