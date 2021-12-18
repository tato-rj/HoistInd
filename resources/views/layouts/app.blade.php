<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}} | {{$name ?? 'Grow your business with us'}}</title>

{{--         <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('favicon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff"> --}}

    <link rel="canonical" href="https://hoistind.com/industries/gc/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="General Contractors - Hoist Industries" />
    <meta property="og:description" content="General Contractors Construction Hoist, scaffold, shoring, bridge rentals &amp; Internal Elevators installation and modernization. Learn More Preventing Delays Hoist industries will provide a complete or partial solution for your construction site. Whether it is a rental in only one segment or a complete broadband of our full portfolio, we have got you covered.  Our partners in the&hellip;" />
    <meta property="og:url" content="https://hoistind.com/industries/gc/" />
    <meta property="og:site_name" content="Hoist Industries" />
    <meta property="article:publisher" content="https://www.facebook.com/Hoist-Industries-104555821822005" />
    <meta property="article:modified_time" content="2021-10-11T17:52:28+00:00" />
    <meta property="og:image" content="https://hoistind.com/wp-content/uploads/elementor/thumbs/GCs-pbklxo4p335l37v0u5qxiitpsofgixl9v1tkj94us0.png" />

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <style type="text/css">

        </style>
        @stack('header')
    </head>
    <body>
        {{-- @include('layouts.header') --}}
        
        @yield('content')

        {{-- @include('layouts.footer') --}}

        @if($message = session('success'))
        @alert([
            'color' => 'green',
            'message' => '<strong class="mr-2">Success |</strong>' . $message,
            'dismissible' => true,
            'floating' => 'top'])
        @endif

        @if($message = session('error') ?? $errors->first())
        @alert([
            'color' => 'red',
            'message' => '<strong class="mr-2">Sorry |</strong>' . $message,
            'dismissible' => true,
            'floating' => 'top'])
        @endif

        <script src="{{ mix('js/app.js') }}"></script>
        </script>
        @stack('scripts')
    </body>
</html>
