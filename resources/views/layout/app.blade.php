<!doctype html>
<html x-data="{ darkMode: false }" 
    x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                localStorage.setItem('darkMode', JSON.stringify(true));
            }
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" 
            x-cloak>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['./resources/css/app.css', './resources/js/app.js '])
        @livewireStyles
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ url('/site.webmanifest') }}">
        <link rel="icon" type="image/x-icon" href="{{ url('/favicon.ico') }}">
    </head>
    <body x-bind:class="{'dark' : darkMode === true}">
        <div  class="antialiased text-port-text dark:text-port-text-dark min-w-[280px] flex flex-col min-h-screen">
            <x-layout.navbar/>
            <main class="flex-grow ">
                {{ $slot }}
            </main>
            <x-layout.footer/>
            @livewireScripts
        </div>
    </body>
</html>