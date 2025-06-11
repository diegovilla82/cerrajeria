<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col font-sans antialiased">
    
        <!-- header -->
        @include('layouts.header')




    <main class="flex-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <div class="whatsapp-container">
        <a href="https://api.whatsapp.com/send?phone=5493624883103" class="whatsapp-link" target="_blank">
            <img src="{{ asset('/img/whatsapp-btn.png')}}" alt="WhatsApp">
            <span class="whatsapp-tooltip">¡Hola! ¿En que podemos ayudarte?</span>
        </a>
    </div>
</body>

</html>
