<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-cloak x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="public/images/favicons/site.webmanifest">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-rose-100 dark:bg-rose-950 notranslate">
        <x-layout.header />

        {{ $slot }}

        <x-layout.footer />
    </body>
</html>
