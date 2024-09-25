<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-rose-100 dark:bg-rose-800 text-rose-900 dark:text-rose-50">
    <x-header />
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>
