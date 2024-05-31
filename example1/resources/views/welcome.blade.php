<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejemplo 1</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>
       
    </head>
    <body class="antialiased">
        
        <div class="bg-gray-100 h-screen flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold text-gray-800">¡Hola, mundo!</h1>
                <p class="text-gray-600">Este es un ejemplo de Tailwind CSS.</p>
                <a href="{{route('page2')}}">Ir a Pagina 2</a>
            </div>
        </div>

        
    </body>
</html>
