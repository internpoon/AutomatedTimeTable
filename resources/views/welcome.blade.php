<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>Window.Laravel = { csrfToken: '{{csrf_token()}}'}</script>
        <title>Laravel</title>
        
        {{--Bootstrap // Style--}}
        {!! HTML::style('css/app.css') !!}
        {!! HTML::style('css/bootstrap.min.css') !!}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
        <div id="app">
            <div class="container">
                <example-component></example-component>
            </div>
        </div>

    <script src = "{{ asset(('js/app.js ')) }}"></script>
    </body>
</html>
