@extends('layouts.template')

@section('contenu')
   
    <!--début de Prodect area -->
    <div class="product-area pb-100">

        <div class="section-title-5 text-center">
            <h2>Featured Product</h2>
        </div>

        <div class="shop-area pt-95 pb-100">
 
            <div class="container">
                
                
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">

                        @if  (Session::has("message"))
                        <div class="alert alert-success">{{Session::get("message")}}</div>
                        @endif 

                        <div class="tab-pane" >
                            <div class="row item-wrapper3">

                                @foreach ($products as $product)
    
                                <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 toggle-item-active3">
                                    <div class="product-wrap mb-25 scroll-zoom">
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="default-img" src="{{ asset('images/products/'. $product->photo1) }}" width="117" height="200" alt="">
                                                <img class="hover-img" src="{{ asset('images/products/'. $product->photo2) }}" width="117" height="200" alt="">
                                            </a>
                                            <span class="purple">New</span>
                                             
                                            <div class="product-action" style="width: 100%;  background-color: rgba(0, 0, 255, 0.1);" >
                                                {{--<div class="pro-same-action pro-wishlist">
                                                    <a title="Wishlist" href="#"><i class="pe-7s-l ike"></i></a>
                                                </div>--}}
                                                <div class="pro-same-action pro-cart" style="width: 100%;  background-color: rgba(0, 0, 255, 0.1);" >
                                                    <form  method="post" action="{{route('panier.addToCart')}}" title="Ajouter au panier">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$product->id}}">
                                                        <input type="hidden" name="name" value="{{$product->name}}">
                                                        <input type="hidden" name="price" value="{{$product->price}}">
                                                        <input type="hidden" name="photo1" value="{{$product->photo1}}">
                                                        <input type="hidden" name="qty" value="1">
                                                        <button type="submit" class="btn" style="width: 10em; padding: 0; border: none; background-color: rgba(0, 0, 255, 0.5);">
                                                            <i class="fa fa-shopping-cart"></i>Ajouter au panier
                                                        </button>                                                    
                                                    </form>
                                                </div>
                                                {{--<div class="pro-same-action pro-quickview">
                                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                </div>--}}
                                            </div>
                                            {{--<a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>--}}
                                            
                                        </div>
                                        <div class="product-content-2">
                                            <div class="title-price-wrap-2">
                                                <h3><a href="product-details.html">{{$product->name}}</a></h3>
                                                <div class="price-2">
                                                    <span> {{$product->price}} €/
                                                        @if (strpos($product->description, 'KG') !== false)
                                                            KG
                                                        @elseif (strpos($product->description, 'PCE') !== false)
                                                            Pièce
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="pro-wishlist-2">
                                                <a title="Wishlist" href=""><i class="fa fa-heart-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                @endforeach


                                <div class="view-more text-center mt-20 toggle-btn3 col-12">
                                    <a class="loadMore3" href="#">VIEW MORE PRODUCTS</a>
                                </div>
                            </div>
                        </div>
                            
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-style mr-30">
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Search </h4>
                                <div class="pro-sidebar-search mb-50 mt-25">
                                    <form class="pro-sidebar-search-form" action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button>
                                            <i class="pe-7s-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Refine By </h4>
                                <div class="sidebar-widget-list mt-30">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox"> <a href="#">On Sale <span>4</span> </a> 
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">New <span>4</span></a> 
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">In Stock <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mt-45">
                                <h4 class="pro-sidebar-title">Filter By Price </h4>
                                <div class="price-filter mt-10">
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <div class="sidebar-widget mt-50">
                                <h4 class="pro-sidebar-title">Colour </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Green <span>4</span> </a>
                                                <span class="checkmark"></span> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Cream <span>4</span> </a>
                                                <span class="checkmark"></span> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Blue <span>4</span> </a>
                                                <span class="checkmark"></span> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Black <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mt-40">
                                <h4 class="pro-sidebar-title">Size </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XL</a>
                                                <span class="checkmark"></span> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">L</a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">SM</a>
                                                <span class="checkmark"></span> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XXL</a>
                                                <span class="checkmark"></span> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mt-50">
                                <h4 class="pro-sidebar-title">Tag </h4>
                                <div class="sidebar-widget-tag mt-25">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">For Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Fashion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de Prodect area -->
@endsection

