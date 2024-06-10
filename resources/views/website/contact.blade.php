@extends("layouts.template")

@section('titre')
Page Contact
@endsection


@section('contenu')
    
{{--@show--}}
<h1>Contactez-Nous</h1>
<div class="contact-form">
    <form method="POST" action="{{ route('website.save') }}" class="contact-form-style" id="contact-form">
        <!-- A RETENIR : un formulaire dans laravel doit contenir surement
            un champs token -->
        @csrf
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Votre prenom</label>
        <input type="text" name="prenom" id="prenom">

        <label for="email">Votre email</label>
        <input type="email" name="email" id="email">

        <label for="message">Votre message</label>
        <textarea name="message" id="message" cols="50" rows="5"></textarea>

        <button type="submit">Envoyer</button>
        <button type="reset">Annuler</button>
    </form>
</div>

    
@endsection