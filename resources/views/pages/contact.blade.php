@extends('layouts/master', ['titre' => 'Contact'])


@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panier.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            <h3>Contactez Nous</h3>
        </div>

        <div id="Article" class="col-xs-12">
            <div class="Info">
                <div class="part">
                    <div class="int">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <span>Localisation :</span>
                            <span>{{ getInfo('location') }}</span>
                        </div>
                    </div>
                </div>
                <div class="part">
                    <div class="int">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <span>Phone :</span>
                            <span>{{ getInfo('phone') }}</span>
                        </div>
                    </div>
                    <div class="int">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="text">
                            <span>Mail :</span>
                            <span>{{ getInfo('email') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Send_mail">
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    
                    @if($errors->isNotEmpty())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @if($errors->first('nom') != '' )<li>{{ $errors->first('nom') }}</li>@endif
                                @if($errors->first('email') != '' )<li>{{ $errors->first('email') }}</li>@endif
                                @if($errors->first('sujet') != '' )<li>{{ $errors->first('sujet') }}</li>@endif
                                @if($errors->first('message') != '' )<li>{{ $errors->first('message') }}</li>@endif
                            </ul>
                        </div>
                    @endif

                    <div class="deux">
                        <div class="label_input">
                            <input type="text" name="nom" id="Nom" autocomplete="off" value="{{ old('nom') }}" class="@error('nom') errors @enderror" required>
                            <label for="Nom" class="label_name">
                                <span class="content_name">Votre Nom</span>
                            </label>
                        </div>  

                        <div class="label_input">
                            <input type="email" name="email" id="Mail" autocomplete="off" value="{{ old('email') }}" class="@error('email') errors @enderror" required>
                            <label for="Mail" class="label_name">
                                <span class="content_name">Votre Mail</span>
                            </label>
                        </div> 
                    </div>
                    <div class="un">
                        <div class="label_input">
                            <input type="text" name="sujet" id="Sujet" autocomplete="off" value="{{ old('sujet') }}" class="@error('sujet') errors @enderror" required>
                            <label for="Sujet" class="label_name">
                                <span class="content_name">Votre Sujet</span>
                            </label>
                        </div>  

                        
                        <textarea  name="message" placeholder="Votre Message"  value="{{ old('message') }}" class="@error('message') errors @enderror" required></textarea>


                        <button type="submit">
                            <span>Envoyer</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

