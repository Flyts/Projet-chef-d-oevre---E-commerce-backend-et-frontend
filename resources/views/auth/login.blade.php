@extends('layouts.master', ['titre' => 'Connexion'])


@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/merci.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush


@section('Body_Page')
    <section>
        <div id="News">

            <div class="Product">
                <article>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <h3>Connectez vous</h3>

                        <div class="Lable_input">  
                            <input type="email" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" class="@error('email') {{ 'errors' }} @enderror" required>
                            @error('email')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input type="password" name="password" placeholder="Password" value="{{ old('email') }}" class="@error('password') {{ 'errors' }} @enderror" required>
                            @error('email')
                                <span class="error">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="Label_check">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <button type="submit">
                            <span>Connexion</span>
                        </button>

                        <a href="{{ route('register') }}" style="color: var(--bluegrey_f); margin-left: 15px;">Inscrivez vous</a>
                    </form>
                </article>
            </div>
        </div>
    </section>
@endsection
