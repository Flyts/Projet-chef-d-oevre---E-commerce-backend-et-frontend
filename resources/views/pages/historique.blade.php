@extends('layouts/master', ['titre' => 'Historique'])


@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('css/historique.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            <h3>Historique</h3>
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
            
        @if($historiques->count() == 0)
            <div id="Vide" class="col-xs-12">
                <h3>Votre Historique est vide</h3>
            </div>
        @else
        	@foreach($historiques as $historique)
                <div id="Article" class="col-xs-12">
                    <div class="Titre">
                        <div class="part">
                            <span>Commande passée le </span>
                            <span>{{ getMyDate($historique->payment_create_at) }}</span>
                        </div>
                        <div class="part">
                            <span>{{ getPrice($historique->amount) }}</span>
                        </div>
                    </div>
                    
                    <div class="Orders">
                        @foreach(unserialize($historique->products) as $article)
                            <div class="body">
                                <div class="photo" style="background-image: url({{ asset($article[2]) }});"></div>

                                <div class="valeur">
                                    <span>{{ $article[0] }}</span>
                                    <span>Prix : {{ getPrice($article[1]) }}</span>
                                    <span>Quantité : {{ $article[3] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{ $historiques->appends(request()->input())->links() }}
        @endif
    </section>
@endsection

