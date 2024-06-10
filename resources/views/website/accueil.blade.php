@extends("layouts.template")

@section('titre')
Page d'accueil
@endsection


@section('contenu')
    <!--Début de slider-->
    <div class="slider-area ml-70 mr-70">
        <div class="slider-active owl-carousel nav-style-1 owl-dot-none">
                <div class="single-slider-2 slider-height-1 slider-height-res15 d-flex align-items-center slider-height-res bg-img" style="background-image:url(assets/img/slider/slider-8.jpg); height: 425px;"> 
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col66-md-7 ms-auto">
                            <div class="slider-content-2 slider-content-fruits slider-animated-1">
                                <h3 class="animated">Naturel & Sain</h3>
                                <h1 class="animated">100% Organique <br>Fruits et Légumes</h1>
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
    
    <!--début de suppoer area-->
    <div class="suppoer-area pt-10 pb-90 hm9-section-padding">
        <div class="container-fluid padding-10-row-col">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="support-wrap-3 support-bg-color-1 text-center mb-10">
                        <div class="support-icon-2">
                            <img class="animated" src="{{ asset ('assets/img/icon-img/support-5.png') }}" alt="">
                        </div>
                        <div class="support-content-3">
                            <img src="{{ asset ('assets/img/icon-img/support-8.png') }}" alt="">
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="support-wrap-3 support-bg-color-2 text-center mb-10">
                        <div class="support-icon-2">
                            <img class="animated" src="{{ asset ('assets/img/icon-img/support-6.png') }}" alt="">
                        </div>
                        <div class="support-content-3">
                            <img src="{{ asset ('assets/img/icon-img/support-9.png') }}" alt="">
                            <p>Back guarantee under 5 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="support-wrap-3 support-bg-color-3 text-center mb-10">
                        <div class="support-icon-2">
                            <img class="animated" src="{{ asset ('assets/img/icon-img/support-7.png') }}" alt="">
                        </div>
                        <div class="support-content-3">
                            <img src="{{ asset ('assets/img/icon-img/support-10.png') }}" alt="">
                            <p>Onevery order over $150</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de suppoer -->
    
    
    
    <!--début de banner area -->
    <div class="banner-area hm9-section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-banner mb-20">
                                <a href="product-details.html"><img src="{{ asset ('assets/img/banner/banner-21.png') }}" alt=""></a>
                                <div class="banner-content-3 banner-position-hm15-1">
                                    <h3>Green Apple </h3>
                                    <p>Starting At <span>$99.00</span></p>
                                    <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-banner mb-20">
                                <a href="product-details.html"><img src="{{ asset ('assets/img/banner/banner-22.png') }}" alt=""></a>
                                <div class="banner-content-3 banner-position-hm15-1">
                                    <h3>Ripe orange</h3>
                                    <p>Starting At <span>$99.00</span></p>
                                    <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-banner mb-20">
                        <a href="product-details.html"><img src="{{ asset ('assets/img/banner/banner-23.png') }}" alt=""></a>
                        <div class="banner-content-4 banner-position-hm15-2">
                            <span>-20% Off</span>
                            <h2>New Fruits</h2>
                            <h5>Best for your health</h5>
                            <a href="{{route('website.produits')}}">Acheter Maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="single-banner mb-20">
                                <a href="product-details.html"><img src="{{ asset ('assets/img/banner/banner-24.png') }}" alt=""></a>
                                <div class="banner-content-3 banner-position-hm15-2">
                                    <h3>Ripe Corn </h3>
                                    <p>Starting At <span>$99.00</span></p>
                                    <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="single-banner mb-20">
                                <a href="product-details.html"><img src="{{ asset ('assets/img/banner/banner-25.png') }}" alt=""></a>
                                <div class="banner-content-3 banner-position-hm15-2">
                                    <h3>Green guava </h3>
                                    <p>Starting At <span>$99.00</span></p>
                                    <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de Prodect area -->
    
    <!--début de funfact area -->
    <div class="funfact-area pt-80 pb-95">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="funfact-content funfact-res text-center">
                        <h2>Promo de jour</h2>
                        <div class="timer">
                            <div data-countdown="2022/06/01"></div>
                        </div>
                        <div class="funfact-btn funfact-btn-green btn-hover">
                            <a href="{{route('website.produits')}}">Acheter Maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="fruits-deal-img">
                        <a href="#"><img class="wow fadeInRight" src="{{ asset ('assets/img/banner/deal.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de funfact area -->
    
    <!--début de testimonial-area -->
    <div class="testimonial-area bg-gray-3 pt-100 pb-95 ml-70 mr-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ms-auto me-auto">
                    <div class="testimonial-active owl-carousel nav-style-1 nav-testi-style owl-dot-none">
                        <div class="single-testimonial text-center">
                            <img src="{{ asset ('assets/img/testimonial/testi-1.png') }}" alt="">
                            <p>La plateforme Shop permet de d'assurer une expérience conviviale aux utilisateurs, aux clients et aux administrateurs pendant leurs achats ou lors de la gestion de contenu de l'application  </p> 
                           <div class="client-info">
                                <i class="fa fa-map-signs"></i>
                                <h5>Grace Alvarado</h5>
                                <span>Customer</span>
                            </div>
                        </div>                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--début de testimonial-area -->
    
    <!--début de subscribe area -->
    <!--<div class="subscribe-area-3 pt-100 pb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-7 col-md-10 ms-auto me-auto">
                    <div class="subscribe-style-3 text-center">
                        <h2>Subscribe </h2>
                        <p>Subscribe to our newsletter to receive news on update</p>
                        <div id="mc_embed_signup" class="subscribe-form-3 mt-35">
                            <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Your Email Address" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear-3 green-subscribe">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--fin de funfact area -->
@endsection
