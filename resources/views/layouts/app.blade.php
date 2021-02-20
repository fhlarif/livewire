<html>
    <head>
        <title>Livewire Registration</title>
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