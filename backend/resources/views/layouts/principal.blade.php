<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
</head>
<body>

    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{route('clientes.index')}}" class="{{request()->routeIs('clientes.index') ? 'active' : ''}}">Clientes</a>
                    </li>
                    <li>
                        <a href="{{route('produtos.index')}}" class="{{request()->routeIs('produtos.index') ? 'active' : ''}}">Produtos</a>
                    </li>
                    <li>
                        <a href="{{route('departamentos.index')}}" class="{{request()->routeIs('departamentos.index') ? 'active' : ''}}">Departamentos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col2">
            @yield('conteudo')
        </div>
    </div>
</body>
</html>