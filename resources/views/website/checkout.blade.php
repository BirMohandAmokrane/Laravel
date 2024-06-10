@extends('layouts.template')

@section('contenu')
<div class="checkout-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3>Détails de facturation</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>Nom</label>
                                    <input placeholder="votre nom" type="text" name="name" id="name" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <input placeholder="adresse email" type="email" name="email" required>
                            <input placeholder="mot de passe" type="password" name="password" required>
                            <input placeholder="confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" required >

                            <button class="btn-hover checkout-btn" type="submit">S'inscrire</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-lg-5">
                <div class="your-order-area">
                    <h3>Votre Commande</h3>
                    <div class="your-orde/r-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Produits</li>
                                    <li>Total</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>
                                    @php
                                    $total=0;
                                    @endphp
                                    @forelse ($products as $key => $product)
                                        @php
                                            $total+= $product['price']*$product['qty'];
                                        @endphp

                                       <li><span class="order-middle-left"><img height="20" width="20" src="{{ asset('images/products/'. $product['photo1'] ) }}" alt=""> {{$product['name']}} X {{$product['qty']}} </span> <span class="order-price">{{$product['price']}} € </span></li>
                                    @empty
                                    
                                        <li><span class="order-middle-left">votre panier est vide</span> <span class="order-price">0 € </span></li>
                                    
                                    @endforelse
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Livraison</li>
                                    <li>Gratuite</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li>{{$total}} €</li>
                                </ul>
                            </div>
                        </div>
                       {{-- <div class="payment-method">
                            <div class="payment-accordion element-mrg">
                                <div class="panel-group" id="accordion">
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-one">
                                            <h4 class="panel-title">
                                                <a data-bs-toggle="collapse" href="#method1">
                                                    Direct bank transfer
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="method1" class="panel-collapse collapse show" data-bs-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-two">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#method2">
                                                    Check payments
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="method2" class="panel-collapse collapse" data-bs-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel payment-accordion">
                                        <div class="panel-heading" id="method-three">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#method3">
                                                    Cash on delivery
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="method3" class="panel-collapse collapse" data-bs-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    <div class="Place-order mt-25">
                        <a class="btn-hover" href="#">Passer sa commande</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection