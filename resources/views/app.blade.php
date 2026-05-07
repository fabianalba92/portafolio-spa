<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link scroll-behavior: smoothpreconnect" href="https://fonts.bunny.net">
        
        <link rel="icon" type="image/jpeg" href="{{ asset('img/fa.jpg') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        <!-- Reemplazo manual de Vite -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-DtwgYJ8u.css') }}">
        <script type="module" src="{{ asset('build/assets/app-dB45Caa8.js') }}"></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
