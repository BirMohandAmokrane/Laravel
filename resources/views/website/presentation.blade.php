@extends("layouts.template")

@section('contenu')
    <!--Début de slider-->
    <div class="slider-area ml-70 mr-70">
        <div class="slider-active owl-carousel nav-style-1 owl-dot-none">
            <div class="single-slider-2 slider-height-1 slider-height-res15 d-flex align-items-center slider-height-res bg-img" style="background-image:url(assets/img/slider/slider-8-2.jpg); height: 425px;"> 
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-7 ms-auto">
                            <div class="slider-content-2 slider-content-fruits slider-animated-1">
                                <h1 class="animated">Shop</h1>
                                <p class="animated">L'application Shop a été créée en 2023, elle propose des services d'achat en ligne de fruits légumes avec leurs différentes variétés et qualibres, assure aux utilisateur quelque soient visiteurs ou clients d'effectuer les cours de manière simple et facile </p>
                                <div class="slider-btn btn-hover">
                                    <a class="animated" href="{{route('website.produits')}}">Acheter Maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de slider area-->
@endsection

