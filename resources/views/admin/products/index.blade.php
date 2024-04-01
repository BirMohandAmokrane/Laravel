@extends('admin.layouts.template')

@section('table')
    Liste des produits
@endsection

@section('contenu')

@if  (Session::has("message"))

    <div class="alert alert-success">{{Session::get("message")}}</div>

@endif

<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th> Photo1</th>
            <th> Photo2</th>
            <th> Name</th>
            <th> Descreption</th>
            <th> Prix</th>
            <th> Categorie</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
    
        @forelse ($products as $product)
        <tr >
            <td><img src="{{asset('images/products/'.$product->photo1 )}}" width="100" height="100"></td>
            <td><img src="{{asset('images/products/'.$product->photo2 )}}" width="100" height="100"></td>
            <td>{{$product->name}}</td>
            <td class="text-wrap" >{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td>                
                <a href="{{route('products.edit', $product->id)}}"> <button type="button" class="btn btn-success mr-2">Modifier</button> </a>
                <form  class="d-inline"   action="{{ route('products.destroy',$product->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" onclick=" return confirm('êtes-vous sûr de supprimer?')" class="btn btn-danger" >Supprimer</button>
                </form>          
            </td>
        </tr>
        @empty
        <tr>
            <td colpsan="2">Products not found</td>
            
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
