<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/teste', '/', 301);    

Route::get('/produtos', [MeuController::class, 'getProdutos']);

Route::get('/multiplicar/{n1}/{n2}', [MeuController::class, 'multiplicar'])
    ->where('n1','[0-9]+')->where('n2','[0-9]+');

Route::resource('clientes', ClienteController::class);