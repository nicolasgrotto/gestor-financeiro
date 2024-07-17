<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Cash Controll </title>
    <link rel="stylesheet" href="{{ asset('/tailwindcharts/css/flowbite.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .panel {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <x-app-layout>
    <div class="container">
        <h1 class="my-4">Histórico Financeiro</h1>
 
        <form method="GET" action="{{ route('history') }}" class="form-inline mb-4">
            <div class="form-group mr-2">
                <label for="month" class="mr-2">Mês</label>
                <select name="month" id="month" class="form-control">
                    <option value="">Todos</option>
                    @for ($m = 1; $m <= 12; $m++)
                        <option value="{{ $m }}" {{ $m == $selectedMonth ? 'selected' : '' }}>
                            {{ date('F', mktime(0, 0, 0, $m, 1)) }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="form-group mr-2">
                <label for="year" class="mr-2">Ano</label>
                <select name="year" id="year" class="form-control">
                    <option value="">Todos</option>
                    @for ($y = date('Y'); $y >= date('Y') - 10; $y--)
                        <option value="{{ $y }}" {{ $y == $selectedYear ? 'selected' : '' }}>{{ $y }}</option>
                    @endfor
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
 
        <h2 class="my-4">Ganhos</h2>
        <div class="row">
            @forelse($earnings as $earning)
                <div class="col-md-4">
                    <div class="panel bg-light">
                        <h3>{{ $earning->description }}</h3>
                        <p>Valor: R$ {{ $earning->amount }}</p>
                        <p>Data: {{ $earning->date }}</p>
                    </div>
                </div>
            @empty
                <p class="col-12">Nenhum ganho encontrado para o período selecionado.</p>
            @endforelse
        </div>
 
        <h2 class="my-4">Despesas</h2>
        <div class="row">
            @forelse($expenses as $expense)
                <div class="col-md-4">
                    <div class="panel bg-light">
                        <h3>{{ $expense->description }}</h3>
                        <p>Valor: R$ {{ $expense->amount }}</p>
                        <p>Data: {{ $expense->date }}</p>
                    </div>
                </div>
            @empty
                <p class="col-12">Nenhuma despesa encontrada para o período selecionado.</p>
            @endforelse
        </div>
    </div>
    </x-app-layout>
</body>
</html>