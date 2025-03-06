@extends('layouts.principal')

@section('title','Departamentos')

@section('conteudo')
    <h3>Departamentos</h3>
    <div>
        <ul>
            <li>Computadores</li>
            <li>Eletrônicos</li>
            <li>Acessórios</li>
            <li>Roupas</li>
        </ul>
    </div>
    
    <x-alerta titulo="Informação" tipo="info">
        <p><strong>Informação</strong></p>
    </x-alerta>
    
    <x-alerta titulo="Erro Fatal" tipo="error">
        <p><strong>Erro</strong></p>
    </x-alerta>
    
    <x-alerta titulo="Sucesso" tipo="success">
        <p><strong>Sucesso</strong></p>
    </x-alerta>
    
    <x-alerta titulo="Aviso" tipo="warning">
        <p><strong>Aviso</strong></p>
    </x-alerta>
    
@endsection