@extends('layouts/master', ['titre' => 'Ma Banque'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banque.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mode_payement.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            <h3>Payement</h3>
        </div>
            
        <div id="Article" class="col-xs-12">
            <div class="Part col-sm-12 col-md-6">
                <div class="int" style="display: block;">
                    <h4 style="margin-bottom: 30px;">Payement Avec Wenze Money</h4>

                    <div class="sommes">
                        <span>Solde de votre compte : <strong>{{ getPriceSansTaxe(getSolde()) }}</strong></span>
                        <span>Somme total de votre panier : <strong>{{ getPrice(Cart::total()) }}</strong></span>
                    </div>
                    
                
                    @if(getSolde() > Cart::total())
                        <form action="{{ route('payement') }}" method="post">
                        @csrf

                        <button type="submit" style="background-color: var(--orange_f); color: var(--grey_2); font-weight: bold;">
                            <span>Payé Avec Wenze Money</span>
                        </button>
                    </form>
                    @else
                        <h5>Le solde de votre compte est insuffisant pour effectuer cette transaction.</h5>
                        <div class="lien">
                            <a href="{{ route('banque') }}">Approvisionner votre compte</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="Part col-sm-12 col-md-6">
                <div class="appro">
                    <div class="content">
                        <h4 style="margin-bottom: 30px;">Autre Type De Payement</h4>
                        <div class="titre">
                            <span>Mpesa</span>
                        </div>
                        <div class="process">
                            <ul>
                                <li>*1222#, <span class="succes">Yes</span></li>
                                <li>1 pour $ et 2 pour Fc</li>
                                <li>Sélectionnez 1 pour Envoi Argent</li>
                                <li>Sélectionnez 1 pour Envoi Argent sans frais de retrait</li>
                                <li>Sélectionnez 1 pour Numéro de téléphone du bénéficiaire</li>
                                <li>Entrer le numéro <span class="orange">{{ getNumeroMpesaWenze() }}</span></li>
                                <li>Entrer le Montant</li>
                                <li>Entrer Votre pin Mpesa</li>
                                <li>Vous allez recevoir un message de Mpesa, tapez le code de la transaction puis <span class="succes">Valider</span> </li>
                            </ul>

                            <form action="{{ route('payement') }}" method="post">
                                @csrf
                                @method('PATCH')

                                <input type="text" placeholder="Code de la transaction" name="code">
                                <input type="hidden" name="reseau" value="vodacom">

                                <button type="submit">
                                    <span>Payé</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('script')
@endpush