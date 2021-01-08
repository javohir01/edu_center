<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    </head>
    <body>
    @include('layouts.nav')

    <div class="container">

        <div class="row">

            @include('layouts.sidebar')

            @yield('content')


        </div>

    </div>

    @include('layouts.footer')
    </body>
</html>
