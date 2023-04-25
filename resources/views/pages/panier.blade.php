@extends('layouts/master', ['titre' => 'Panier'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            <h3>Panier</h3>
            <a href="{{ route('cart.alldestroy') }}"><span>Vider mon panier</span></a>
        </div>
        <div id="Message">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
            
        @if($paniers->count() == 0)
            <div id="Vide" class="col-xs-12">
                <h3>Votre panier est vide</h3>
            </div>
        @else
        	@foreach($paniers as $panier)
                <div id="Article" class="col-xs-12">
                    <div class="Content">
                        <div class="quantity">
                            <div class="add">
                                <!-- <span class="fa fa-plus"></span> -->
                                <input type="number" name="qty" data-id="{{ $panier->rowId }}" id="Qty" value="{{ $panier->qty }}" min="1">
                            </div>
                        </div>
                        <div class="aside">
                            <div class="photo" style="background-image: url({{ asset($panier->model->image) }});"></div>
                            <div class="text">
                                <span>{{ $panier->model->titre }}</span>
                                <span>{{ $panier->model->subtitle }}</span>
                                <div class="stock">
                                    <span class="fa fa-check"></span>En stock
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Other">
                        <span>{{ getPrice($panier->subtotal()) }}</span>
                        <form action="{{ route('cart.destroy', ['rowId' => $panier->rowId, 'qty' => $panier->qty]) }}" method="post">
                            @csrf

                            <button type="submit">
                                <span class="fa fa-times-circle"></span>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <div id="Total" class="col-xs-12">
                <div class="Coupon_code col-xs-12 col-md-6">
                    <h4>Coupon Code</h4>
                    <div class="int">
                        <form action="#" method="post">
                            <input type="text" name="code" placeholder="Appliquer le coupon">

                            <button type="submit">
                                <span class="fa fa-gift"></span>Appliquer
                            </button>
                        </form>
                    </div>
                </div>

                <div class="Recapitulatif col-xs-12 col-md-6">
                    <h4>Récapitulatif</h4>
                    <div class="int">
                        <div class="part">
                            <div class="one">
                                <span>Panier</span>
                                <span>{{ getProductPlural(Cart::count()) }}</span>
                            </div>
                            <div class="two">
                                <span>{{ getPriceNotTaxe(Cart::subtotal()) }}</span>
                            </div>
                        </div>

                        <div class="part">
                            <div class="one">
                                <span>Frais de livraison</span>
                                <span>Livraison à kinshasa</span>
                            </div>
                            <div class="two">
                                <span>0 $</span>
                            </div>
                        </div>

                        <div class="part">
                            <div class="one">
                                <span>Taxe</span>
                                <span></span>
                            </div>
                            <div class="two">
                                <span>{{ getMyTaxe(Cart::total()) }}</span>
                            </div>
                        </div>

                        <hr>

                        <div class="total_price">
                            <span>Total</span>
                            <span>{{ getPrice(Cart::total()) }}</span>
                        </div>

                        <div class="Validate">
                            <a href="{{ route('payement.index') }}">
                                <span>Passer à la caisse</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @endif
    </section>
@endsection


@push('script')
    <script type="module" src="{{ asset('js/panier.js') }}"></script>
@endpush