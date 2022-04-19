<!DOCTYPE html>
<html>

<head>
    <title>Alp-wire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body class="antialiased">
    @livewire('welcome-page')

    @livewireScripts
</body>

</html>
