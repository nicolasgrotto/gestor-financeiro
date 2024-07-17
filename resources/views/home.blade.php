<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cash Controll </title>
    <link rel="stylesheet" href="{{ asset('/tailwindcharts/css/flowbite.min.css') }}">
</head>
<body class="bg-gray-200">
    <header class="p-5 bg-blue-500 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <img src="{{ asset('/images/logotipo-cash-controll.jfif') }}" alt="Logotipo - Cash Controll" class="h-10">
            <nav>
                <a href="{{ route('register')}}" class="px-3 py-2 rounded"> Cadastrar </a>
                <a href="{{ route('login')}}" class="px-3 py-2 ml-3 rounded"> Login </a>
            </nav> 
        </div>
    </header>

    <main class="flex-grow bg-cover bg-center" style="background-image: url('/images/image-fundo-cash-controll.jfif'); height: 834px;">
        <div class="text-white p-20">
            <h1 class="text-4xl font-bold mb-2"> Gerencie Suas Finanças com Facilidade... </h1>
            <p class="text-xl"> Transforme suas finanças em um jogo de tabuleiro. </p> 
        </div>
    </main>

    <script src="{{ asset('/tailwindcharts/js/flowbite.min.js') }}"></script>
    <script src="{{ asset('/tailwindcharts/js/apexcharts.js') }}"></script>
</body>
</html>
