<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title> Cash Controll </title>
    <link rel="stylesheet" href="{{ asset('/tailwindcharts/css/flowbite.min.css') }}">
    <style>
        .panel {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .btn-primary{
            background-color: lightblue;
            margin-left: 300px;
            margin-top: 10px;
            border-radius: 15px;
            padding: 5px;
        }
        .secondary-title{
            padding-left: 15px;
            font-weight: bold;
            font-size: 22px;	
        }

        form{
            width: 50%;
        }

        .form-group{
            display: flex;
            flex-direction: column;
            align-content: center;
        }
        .form-group label{
            padding-left: 25px;
        }
    </style>
</head>
<body>
<x-app-layout class="p-5 bg-blue-500 text-white">
    <div class="col-md-4 pg-4 bg-white shadow rounded-lg">
        <header class="p-5 bg-blue-500 text-white">
            <div class="container mx-auto flex justify-between items-center">
                <nav>
                    <a href="{{ route('history')}}" class="px-3 py-2 ml-3 rounded" arial-label="Ir para histórico"> Histórico </a>
                </nav> 
            </div>
        </header>
        <div class="container">      
            <div class="row">
                <div class="col-md-4 p-4 bg-white shadow rounded-lg">
                    <div class="panel bg-light">
                        <h2> Total de Dinheiro Sobrando </h2>
                        <p> {{ $totalSobrando }} </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-4 bg-white shadow rounded-lg">
                <div class="panel bg-light">
                    <h2> Total de Ganhos </h2>
                    <p> {{ $totalGanhos }} </p>
                </div>
            </div>
            <div class="col-md-4 p-4 bg-white shadow rounded-lg">
                <div class="panel bg-light">
                    <h2> Total de Gastos </h2>
                    <p> {{ $totalGastos }} </p>
                </div>
            </div>
        </div>
        
        <h2 class="secondary-title"> Adicionar Ganho </h2>
        <form action="{{ route('earnings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description"> Descrição: </label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount"> Valor: </label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date"> Data: </label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Adicionar Ganho </button>
        </form>
        
        <h2 class="secondary-title"> Adicionar Despesa </h2>
        <form action="{{ route('expenses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="description"> Descrição: </label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount"> Valor: </label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date"> Data: </label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Adicionar Despesa </button>
        </form>

        <h2 class="col-md-4 p-4 bg-white shadow rounded-lg"> Ganhos Recentes </h2>
        <div class="row">
            @foreach($earnings as $earning)
                <div class="col-md-4 p-4 bg-white shadow rounded-lg">
                    <div class="panel bg-light">
                        <h3> {{ $earning->description }} </h3>
                        <p> Valor: R$ {{ $earning->amount }} </p>
                        <p> Data: {{ $earning->date }} </p>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="col-md-4 p-4 bg-white shadow rounded-lg"> Despesas Recentes </h2>
        <div class="row">
            @foreach($expenses as $expense)
                <div class="col-md-4 p-4 bg-white shadow rounded-lg">
                    <div class="panel bg-light">
                        <h3> {{ $expense->description }} </h3>
                        <p> Valor: R$ {{ $expense->amount }} </p>
                        <p> Data: {{ $expense->date }} </p>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>
</body>
</html>
