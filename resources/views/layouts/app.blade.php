<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$name ?? 'Hoist Ind - Elevator, Engineering Consulting'}} | {{config('app.name')}}</title>

        @include('layouts.components.favicon')
        @include('layouts.components.seo')

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @stack('header')
    </head>
    <body>
        @include('layouts.header')
        
        @yield('content')

        @include('layouts.footer')

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

        @stack('scripts')
    </body>
</html>
