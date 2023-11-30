<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <style>
        </style>
    </head>
    <body class="bg-gray-200">
        <header class="flex items-center justify-between p-5 bg-white border-b shadow ">
            <h1 class="text-3xl font-black">devstagram</h1>
        </header>
        <nav>
            <a href=""  class="font-bold text-gray-600 uppercase text-small">login</a>
            <a href=""  class="font-bold text-gray-600 uppercase text-small">cuenta</a>
        </nav>
        <main>
            <h2 class="mb-10 text-3xl font-black text-center">
                @yield('titulo')
            </h2>
        </main>
        <footer class="p-5 font-bold text-center text-gray-500 uppercase">
            Todos los derechos recervados {{ date('Y') }}
        </footer>
        @yield('contenido')
    </body>
</html>
