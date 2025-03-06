<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', ClienteController::class);

Route::resource('departamentos', DepartamentoController::class);

Route::resource('produtos', ProdutoController::class);