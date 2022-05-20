<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles />
</head>
<body class="bg-gray-50">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-8">
    {{ $slot }}
</div>
<livewire:scripts />
</body>
</html>
