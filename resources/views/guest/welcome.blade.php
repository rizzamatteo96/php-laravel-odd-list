<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolpress</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
       
        <div id="app">
            
        </div>

        {{-- collegamento a JS --}}
        <script src="{{asset('js/front.js')}}"></script>
    </body>
</html>
