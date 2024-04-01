@extends('layouts.template')


@section('contenu')
    {{--  pour afficher une variable dans un fichier blade=> {{ $nom_var }} --}}
Votre nom est : {{ $request->nom }}
<br>
Votre prenom est : {{ $request->prenom }}
<br>
votre email est : {{ $request->email }}
<br>
votre message est :  {{ $request->message }}
@show

