<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container">
        <div class="bg-gray-100 h-screen flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold text-gray-800">Vista 2!</h1>
                <p class="text-gray-600">Este es un ejemplo de Tailwind CSS.</p>
                <a href="{{ route('home') }}">Ir a Pagina 1</a>

                {{-- Formulario que pida el nombre --}}
                <h1 class="text-2xl font-bold text-gray-800 mt-6">Formulario</h1>
                <form action="saludar" method="POST">
                    @csrf
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                </form>

                {{-- Sumar dos números --}}
                <h1 class="text-2xl font-bold text-gray-800 mt-6">Sumar dos números</h1>
                <form action="{{route('suma')}}" method="POST">
                    @csrf
                    <label for="num1">Número 1:</label>
                    <input type="number" name="num1" id="num1" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <label for="num2">Número 2:</label>
                    <input type="number" name="num2" id="num2" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if (session('error'))
        <script>
            /*dar un alerta de error con estilos*/
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            })
        </script>
    @endif

    @if (session('success'))
        <script>
            /*dar un alerta de exito con estilos*/
            Swal.fire({
                position: "top-end",
                icon: 'success',
                title: 'Hola {{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

</body>

</html>
