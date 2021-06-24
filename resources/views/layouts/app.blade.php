<!DOCTYPE html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @livewireStyles
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Fonts -->
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- Font Awesome --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--  Bootstrap 5  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap5.css')}}">
    {{--  Custom css  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/logincustom.css')}}">
</head>
<body>
    <div id="app">
        @include('layouts.inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('frontend/js/custom.js')}}"></script>   
        <script src="{{ asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap5.bundle.js')}}"></script>
        @livewireScripts
</body>
</html>
