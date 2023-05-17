<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['./resources/css/app.css', './resources/js/app.js '])
    </head>

    <body class="antialiased text-port-text dark:text-port-text-dark min-w-[280px] flex flex-col min-h-screen">
        <x-layout.navbar></x-layout.navbar>
        <main class="flex-grow ">
            {{ $slot }}
        </main>
        
        <x-layout.footer></x-layout.footer>
    </body>
</html>

