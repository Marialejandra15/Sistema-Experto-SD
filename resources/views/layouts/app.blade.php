<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/logoPNG.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('images/logos/logoPNG.png') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
            {{ $js }}
        @endisset
        <footer class="flex bg-gray-600 text-white items-center justify-center">
            <img class="my-1" src="{{ asset('images/logos/LogoSidebar.png') }}" width="60px" alt="">
            <p>© 2022 SmileMakers, para una eduación mejor</p>
        </footer>
    </body>
</html>
