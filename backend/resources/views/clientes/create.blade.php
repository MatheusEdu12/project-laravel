@extends('layouts.principal')

@section('title','Clientes - Criar')

@section('conteudo')
    <h3>Novo cliente</h3>
    <form action=" {{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Salvar">
    </form>
    <br>
    <a href=" {{route('clientes.index')}} ">Voltar</a>
@endsection