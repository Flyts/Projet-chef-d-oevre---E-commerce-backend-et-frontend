@extends('layouts/master', ['titre' => 'Payement'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/merci.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div id="Article" class="col-xs-12">
            <h1>Merci</h1>
            <h4>Vous allez être rédirigé vers la page d'accueil dans <span id="second"></span></h4>
        </div>
    </section>
@endsection


@push('script')
    <script>
        
        /*Redirect*/

        (function()
        {
            setInterval(function()
            {
                window.location.href = '';
            }, 5000);
        })();

        (function()
        {
            var second = document.querySelector('#second');
            var i = 5;

            second.innerHTML = i;

            var times = setInterval(function()
            {
                i--;
                second.innerHTML = i;

                if (i == 0) 
                {
                    clearInterval(times);      
                }
            }, 1000);
        })();
    </script>
@endpush