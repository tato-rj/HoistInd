<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$name ?? 'Hoist Ind - Construction Elevator & Engineering Consulting | Hoist Industries| New York'}}</title>

        <meta name="description" content="{{$description ?? 'Hoist Industries are a consulting, service, and repair company for your Construction Hoist needs in New York.'}}">
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

        <script type="text/javascript">
        $('form').on('submit', function() {
            $(this).find('button[type="submit"]').prop('disabled', true);
        });

        $('form[axios]').submit(function(e) {
            e.preventDefault();
            let url = $(this).attr('axios');
            let name = $(this).find('input[name="name"]').val();
            let email = $(this).find('input[name="email"]').val();
            let $container = $(this).parent();

            axios.post(url, {name: name, email: email})
            .then(function(response) {
                $container.html(response.data);
            })
            .catch(function(error) {
                alert('Sorry, we couldn\'t send out your request at this time.');
                console.log(error);
            })
            .then(function() {
                //
            });
        });
        </script>

        @stack('scripts')
    </body>
</html>
