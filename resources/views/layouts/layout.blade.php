<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-8">
    {{ $slot }}
</div>
    @livewireScripts
</body>
</html>
