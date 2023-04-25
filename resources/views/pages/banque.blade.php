@extends('layouts/master', ['titre' => 'Ma Banque'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banque.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            <h3>Ma Banque</h3>
        </div>
            
        <div id="Article" class="col-xs-12">
            <div class="Part col-sm-12 col-md-6">
                <div class="int">
                    <div class="content">
                        <span>Solde :</span>
                        <span>{{ getPriceSansTaxe(getSolde()) }}</span>
                    </div>
                    <div class="content">
                        <span>dépense :</span>
                        <span>{{ getPriceSansTaxe(getDepense()) }}</span>
                    </div>
                </div>
            </div>
            <div class="Part col-sm-12 col-md-6">
                <div class="appro">
                    <div class="content">
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

                            <form action="{{ route('banque') }}" method="post">
                                @csrf

                                <input type="text" placeholder="Code de la transaction" name="code">
                                <input type="hidden" name="reseau" value="vodacom">

                                <button>
                                    <span>Approvisionner</span>
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