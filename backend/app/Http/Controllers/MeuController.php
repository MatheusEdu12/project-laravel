<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public function getProdutos(){
        echo "<h1>Produtos</h1>";                       
        echo "<ul>";                       
            echo "<li>Produtos </li>";                       
            echo "<li>Produtos </li>";                       
            echo "<li>Produtos </li>";                       
            echo "<li>Produtos </li>";                       
        echo "<ul/>";                       
    }

    public function multiplicar(float $n1, float $n2) {
        return "Resultado = " . $n1 * $n2;
    }

}
