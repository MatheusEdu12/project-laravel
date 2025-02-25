<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/teste', '/', 301);    

Route::put('/requests', function(Request $request) {
    return 'MÉTODO PUT';
});

Route::post('/requests', function(Request $request) {
    return 'MÉTODO POST';
});

Route::delete('/requests', function(Request $request) {
    return 'MÉTODO DELETE';
});

Route::get('/requests', function(Request $request) {
    return 'MÉTODO GET';
});

Route::get('/parametros/{nome}/{sobrenome?}', function($nome, $sobrenome=null) {
    if (!is_null($sobrenome)){
        return "Olá $nome $sobrenome!";
    }
    return "Olá $nome!";
})->where('nome','[a-zA-Z]+')->where('sobrenome','[a-zA-Z]+');