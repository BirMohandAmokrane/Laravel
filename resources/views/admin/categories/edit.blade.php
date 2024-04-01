@extends('admin.layouts.template')

@section('titre')
    <h1>Modifier une Catégorie</h1>
@endsection

@section('table')
    Catégories
@endsection

@section('contenu')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Modifier la Catégorie</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" method="POST" action="{{route('categories.update', $category->id)}}">
      @csrf
      @method('put')
        <div class="card-body">
            <div class="form-group">
            <label for="name">Nom </label>
            <input type="text" name="name" value="{{ $category->name}}" class="form-control @error('name') border-danger @enderror" id="name" placeholder="Enter le nom de la catégorie">
            </div>
            @error('name')
             <div class="text text-danger"> {{ $message }}</div>   
            @enderror
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Modifier</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
        <button type="button" class="btn btn-success"><a href="{{route('categories.index')}}" style="color: white;">Retour</a></button>

      </div>
    </form>
  </div>
    
@endsection