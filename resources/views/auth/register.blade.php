@extends('layouts.master', ['titre' => 'Créer un compte'])


@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/merci.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush


@section('Body_Page')
    <section>
        <div id="News">

            <div class="Product">
                <article>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h3>Inscrivez vous</h3>

                        <!-- <div class="input_mono">
                          <input type="text" name="identifiant" placeholder="Identifiant" value="" autocomplete="identifiant" autofocus="" class="">
                        </div> -->

                        <div class="double_input"> 
                            <div class="int">
                                <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" class="@error('nom') errors @enderror" required>
                                @error('nom')
                                    <p class="error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="int">
                                <input type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}" class="@error('prenom') errors @enderror" required>
                                @error('prenom')
                                    <p class="error">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="input_mono">
                            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" class="@error('email') errors @enderror" required>
                            @error('email')
                                <p class="error">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="input_mono">
                            <input type="tel" name="tel" placeholder="Numéro de téléphone" value="{{ old('tel') }}" class="@error('tel') errors @enderror" required>
                            @error('tel')
                                <p class="error">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="input_mono">
                            <input type="password" name="password" placeholder="Mots de passe" class="@error('password') errors @enderror" required>
                            @error('password')
                                <p class="error">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="input_mono">
                            <input type="password" name="password_confirmation" placeholder="Confirmez votre mots de passe"  required>
                        </div>

                        <div class="btn_connexion"> 
                            <button type="submit">
                                <span>Inscription</span>
                            </button>

                            <a href="{{ route('login') }}">Connectez vous</a>
                        </div>
                      </form>
                </article>
            </div>
        </div>
    </section>
@endsection
