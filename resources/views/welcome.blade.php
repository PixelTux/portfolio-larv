<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['./resources/css/app.css', './resources/js/app.js '])
    </head>
    <body>
        <h1 class="text-3xl font-light underline">
            Hello world!
        </h1>
        <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
            <div>
                <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
                </span>
            </div>
            <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
            <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
            </p>
        </div>
        <div x-data="{ count: 0 }">
            <button x-on:click="count++">Increment</button>  
            <span x-text="count"></span>
        </div>
        <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    </body>
</html>