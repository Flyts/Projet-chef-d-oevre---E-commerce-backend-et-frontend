@extends('layouts/master', ['titre' => 'Favori'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('css/favori.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre" style="margin-bottom: 40px;">
            <h3>favoris</h3>

            @if($favoris->count() != 0)
                <div class="Seach">
                    <form action="{{ route('favori.navigation') }}" method="POST" id="Form">
                        @csrf

                        <label for="Input">
                            <i class="fa fa-search"></i>
                        </label>
                        <input type="text" name="navigation" id="Input">
                    </form>
                </div>

                <a href="{{ route('favori.alldestroy', $all) }}"><span>Effacer tous vos favoris</span></a>
            @endif
        </div>
            
        @if($favoris->count() == 0)
            <div id="Vide" class="col-xs-12">
                <h3>Vous n'avez pas de favori</h3>
            </div>
        @else
            <div id="Content">
                <div class="Utilities">
                    @csrf
                </div>

                @foreach($favoris as $favori)
                    <div id="Article" class="col-xs-12">
                        <div class="Content">
                            <div class="aside">
                                <div class="photo" style="background-image: url({{ asset($favori->image) }});"></div>
                                <div class="text">
                                    <span>{{ $favori->titre }}</span>
                                    <span class="subtitle">{{ $favori->subtitle }}</span>
                                    <div class="voir">
                                        <a href="{{ route('product.index', $favori->slug) }}" class="a">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="Other">
                            <span class="price">{{ getPrice($favori->price) }}</span>

                            <a href="#" id="Cart_plus" class="Cart_plus_favori" title="Ajouter au panier">
                                <span class="fa fa-cart-plus"></span>
                                
                                <form action="{{ route('cart.store') }}" method="post" style="display: none;" id="Form_hidden">
                                    @csrf

                                    <input type="hidden" name="product_id" value="{{ $favori->id }}">
                                </form>
                            </a>

                            <form action="{{ route('favori.destroy', $favori->id) }}" method="post">
                                @csrf
                                
                                <button type="submit"  title="Supprimer de vos favoris">
                                    <span class="fa fa-times-circle"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                {{ $favoris->appends(request()->input())->links() }}
            </div>
        @endif
    </section>
@endsection


@push('script')
    <script type="module" src="{{ asset('js/panier.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/favori_search.js') }}"></script>
@endpush