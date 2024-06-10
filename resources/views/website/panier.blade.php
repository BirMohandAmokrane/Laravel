@extends('layouts.template')

@section('titre')
    page panier
@endsection

@section('contenu')

<div class="cart-main-area pt-90 pb-100">
    <div class="container">
        <h3 class="cart-page-title">Votre panier</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nom Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Sous-total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total=0;
                                @endphp

                                @forelse ($products as $key => $product)
                                    @php
                                        $total+= $product['price']*$product['qty'];
                                    @endphp
                                    
                                    <tr>
                                    <td class="product-thumbnail">
                                        <img height="90" src="{{ asset('images/products/'. $product['photo1'] ) }}" alt="">
                                    </td>
                                    <td class="product-name"> {{ $product['name'] }} </td>
                                    <td class="product-price-cart"><span class="amount"> {{ $product['price'] }} €</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qty" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">{{ $product['price']*$product['qty'] }} €</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('panier.delProdPanier',$key)}}"><i class="fa fa-trash"></i></a>
                                   </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"> Panier est vide!</td>
                                    </tr>
                                @endforelse
                                

                               
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('website.produits')}}">Continuer vos achats</a>
                                </div>
                                <div class="cart-clear">
                                    
                                    <a href="{{route('panier.clearPanier')}}">Vider le panier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Total du panier</h4>
                            </div>
                            <h5>Total produits <span>{{ $total }} €</span></h5>
                            
                            <h4 class="grand-totall-title">Grand Total <span>{{ $total }} €</span></h4>
                            <a href="{{ route('website.checkout') }}">Vérifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection