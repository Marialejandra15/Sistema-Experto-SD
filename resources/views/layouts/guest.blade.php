<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/logoPNG.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('images/logos/logoPNG.png') }}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="max-w-full">
        <div class="bg-white dark:bg-gray-900 overflow-hidden">
            {{ $slot }}
        </div>
    </body>
</html>
