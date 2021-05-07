<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La Molisana</title>
        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        {{-- /google font --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        {{-- header --}}
        @include('parts.header')
        {{-- /header --}}
        {{-- nav --}}
        @include('parts.nav')
        {{-- /nav --}}
    </body>
</html>