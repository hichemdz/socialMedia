<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            svg{
                max-width: 2rem;
                max-height: 2rem;
            }
        </style>

       <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    </head>
    <body class="antialiased bg-gray-900  overflow-y-scroll  max-h-screen" >

       @include('front.header')

     @section('main')

     @show

     @section('content')

     @show

     @section('script')
         <script src="{{asset('js/app.js')}}"></script>
     @show

    </body>
</html>
