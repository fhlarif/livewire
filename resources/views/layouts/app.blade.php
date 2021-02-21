<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <title>Livewire</title>
    @livewireStyles

</head>

<body>
    {{-- Not gonna use it --}}
    {{-- @yield('content') --}}

    {{-- Use Full-Page Components --}}
    {{ $slot }}

    @livewireScripts
</body>

</html>
