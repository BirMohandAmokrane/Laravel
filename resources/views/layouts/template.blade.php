<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('titre') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
</head>
<body>
    <header class="header-area clearfix">

        @include("layouts.headerTop")

            <div class="header-bottom sticky-bar header-res-padding header-padding-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                            @include("layouts.logo")
                        </div>
                        <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                            <div class="main-menu">
                                

                               @include('layouts.navbar')
                                    
                                
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                            <div class="header-right-wrap">
                                <div class="same-style header-search">
                                    <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                                    <div class="search-content">
                                        <form action="#">
                                            <input type="text" placeholder="Search" />
                                            <button class="button-search"><i class="pe-7s-search"></i></button>
                                        </form>
                                    </div> 
                                </div>
                                <div class="same-style account-satting">
                                    <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                                    <div class="account-dropdown">
                                        <ul>
                                            <li><a href="login-register.html">Login</a></li>
                                            <li><a href="login-register.html">Register</a></li>
                                            <li><a href="wishlist.html">Wishlist  </a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="same-style header-wishlist">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="same-style cart-wrap">
                                    <button class="icon-cart">
                                        <i class="pe-7s-shopbag"></i>
                                        <span class="count-style">02</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                       
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$20.00</span></h4>
                                            <h4>Total : <span class="shop-total">$260.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn btn-hover text-center">
                                            <a class="default-btn" href="{{route('panier.panier')}}">Panier</a>
                                            <a class="default-btn" href="{{route('website.checkout')}}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        
    </header>

 <main>
 @yield('contenu') {{-- permet d'integrer un code variable d'une page à l'autre --}}
 </main> 

   
    <footer class="footer-area ml-70 mr-70 footer-white">
        <div class="footer-top pt-80 pb-60 text-center bg-gray-2">
            <div class="container">
                <div class="footer-logo">
                    <a href="index.html">
                        <img alt="" src="{{ asset('assets/img/logo/logo.png')}}">
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="copyright-2 copyright-gray">
                    <p>© 2021 <a href="#">Flone</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="{{ asset('assets/img/product/quickview-l1.jpg')}}" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="{{ asset('assets/img/product/quickview-l2.jpg')}}" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="{{ asset('assets/img/product/quickview-l3.jpg')}}" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="{{ asset('assets/img/product/quickview-l2.jpg')}}" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                                    <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="{{ asset('assets/img/product/quickview-s1.jpg')}}" alt=""></a>
                                    <a data-bs-toggle="tab" href="#pro-2"><img src="{{ asset('assets/img/product/quickview-s2.jpg')}}" alt=""></a>
                                    <a data-bs-toggle="tab" href="#pro-3"><img src="{{ asset('assets/img/product/quickview-s3.jpg')}}" alt=""></a>
                                    <a data-bs-toggle="tab" href="#pro-4"><img src="{{ asset('assets/img/product/quickview-s2.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>$18.00 </span>
                                    <span class="old">$20.00 </span>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="pro-details-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span>3 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                                <li class="gray"></li>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="white"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">l</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                    <div class="pro-details-wishlist">
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Categories :</span>
                                    <ul>
                                        <li><a href="#">Minimal,</a></li>
                                        <li><a href="#">Furniture,</a></li>
                                        <li><a href="#">Electronic</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Tag :</span>
                                    <ul>
                                        <li><a href="#">Fashion, </a></li>
                                        <li><a href="#">Furniture,</a></li>
                                        <li><a href="#">Electronic</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
        
        
        
        
        
        
        
        
        
    <!-- All JS is here
    ============================================ -->
        
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <!-- Ajax Mail -->
    <script src="{{ asset('assets/js/ajax-mail.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
        
</body>
        
        
<!-- Mirrored from template.hasthemes.com/flone/flone/index-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:49:23 GMT -->
</html>
