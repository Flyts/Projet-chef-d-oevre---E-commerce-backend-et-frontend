@extends('layouts/master', ['titre' => 'A Propos de Nous'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush


@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Bienvenu">
            <h3>Bienvenue à {{ config('app.name') }}</h3>

            <div class="Text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
            </div>

            <a href="{{ route('contact') }}">
                <span>Contactez nous</span>
            </a>
        </div>

        <div id="Why_choose_us">
            <div class="Image col-xs-12 col-md-6">
                <div class="int" style="background-image: url({{ asset('img/banner/about.jpg') }});"></div>
            </div>

            <div class="Content col-xs-12 col-md-6">
                <h3>Pourquoi nous choisir?</h3>
                <div class="texte">
                    <div class="part col-xs-6">
                        <i class="fa fa-clock-o"></i>
                        <div class="int">
                            <h4>Soutien 24/7</h4>
                            <span>
                                Lorem ipsum dolor sit amet consect adipisic elit sed do. 
                            </span>

                        </div>
                    </div>

                    <div class="part col-xs-6">
                        <i class="fa fa-bicycle"></i>
                        <div class="int">
                            <h4>Support de livraison</h4>
                            <span>
                                Lorem ipsum dolor sit amet consect adipisic elit sed do. 
                            </span>

                        </div>
                    </div>

                    <div class="part col-xs-6">
                        <i class="fa fa-money"></i>
                        <div class="int">
                            <h4>Compte {{ config('app.name') }}</h4>
                            <span>
                                Lorem ipsum dolor sit amet consect adipisic elit sed do. 
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="Team">
            <h3>Notre équipe</h3>

            <div class="Text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labo.
            </div>

            <div class="Photos">
                <div class="part col-xs-12 col-md-4">
                    <div class="int" style="background-image: url({{ asset('img/samy.jpg') }});">
                        <div class="group">
                            <div class="nom">
                                <span>Samy Tshibanda</span>
                            </div>
                            <div class="socios">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="part col-xs-12 col-md-4">
                    <div class="int" style="background-image: url({{ asset('img/marco.jpg') }});">
                        <div class="group">
                            <div class="nom">
                                <span>Marco Ntwa</span>
                            </div>
                            <div class="socios">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="Sponsors">
            <div class="Container">
                @foreach($sponsors as $sponsor)
                    <a href="{{ $sponsor->lien }}" class="sponsor">
                        <div class="int" style="background-image: url({{ asset($sponsor->image) }});"></div>
                    </a>
                @endforeach
            </div> 
        </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl-modif.js') }}"></script>
@endpush

