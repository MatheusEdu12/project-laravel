@extends('layouts.principal')

@section('title','Clientes')

@section('conteudo')
    <h3>{{ $titulo }}</h3>
    <p>Adicione um novo cliente <a href=" {{ route('clientes.create') }} ">aqui</a></p>

    @if(count($clientes) > 0)
        <ol>
            @foreach ($clientes as $c)
            <li> 
                    {{ $c['nome'] }} |
                    <a href=" {{ route('clientes.edit', ['cliente' => $c['id']]) }} ">Editar</a> |
                    <a href=" {{ route('clientes.show', ['cliente' => $c['id']]) }} ">Informações</a>   |
                    
                    <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Excluir">
                    </form>
            </li>
            @endforeach
        </ol>
        <hr>
    @endif

    @empty($clientes)
        <h4>Não existem clientes cadastrados.</h4>
    @endempty

@endsection
