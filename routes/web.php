<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/cliente', function(){
    $numero = -11;
    return view('cliente',['numero' => $numero]);
});

Route::get('/cliente', function(){
    $numero = 11;
    $nome = "João";
    $codigo = 123;
    $lanches = ["X-Bacon", "X-Salada", "X-Tudo"];
    return view('cliente', [
        'numero' => $numero,
        'nome' => $nome,
        'codigo' => $codigo, 
        'lanches' => $lanches]
    );
})
?>