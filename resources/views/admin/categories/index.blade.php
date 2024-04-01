@extends('admin.layouts.template')

@section('titre')
    <h1>Liste des Catégorie</h1>
@endsection

@section('table')
    Catégories
@endsection

@section('contenu')

<!--Afficher le message de succé--> 
@if  (Session::has("message"))
    <div class="alert alert-success">{{Session::get("message")}}</div>
@endif

<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th> Name</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
    
        @forelse ($categories as $category)
        <tr >
            <td>{{$category->name}}</td>
            <td>

                <a href="{{route('categories.edit', $category->id)}}"> <button type="button" class="btn btn-success mr-2">Modifier</button> </a>

                <form  class="d-inline"   action="{{ route('categories.destroy',$category->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" onclick="return confirm('êtes vous sûr de supprimer la Categorie?')" class="btn btn-danger"  >Supprimer</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colpsan="2">Categories not found</td>
            
        </tr>   
        @endforelse
      
    </tbody>

    <tfoot>
        <tr>
            <th> Name</th>
            <th>Action</th>
        </tr>
    </tfoot>
  </table>

@endsection
