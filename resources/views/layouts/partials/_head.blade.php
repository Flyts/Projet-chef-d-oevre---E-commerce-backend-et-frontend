<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Description du site pour Google (à modifier) --}}
    <meta name="description" content="description du site pour google">

    @stack('meta')

    {{--  CSS  --}}
    <link rel="stylesheet" href="{{ asset('css/fram/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fram/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fram/flyts.css') }}">
    <link rel="stylesheet" href="{{ asset('css//fram/swiper.min.css') }}">


    <link rel="stylesheet" href="{{ asset('css//modif/swiper_modif.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/_avatar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/_categories.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/_nav-menu.css') }}">
    
    @stack('stylesheet')

    {{--  TITRE ET PHOTO DU TITRE (à modifier) --}}
    <link rel="shorcut icon" href="{{ asset('img/logo.png') }}">
    <title>{{ config('app.name') }} - {{ $titre }}</title>
  </head>
  <body>