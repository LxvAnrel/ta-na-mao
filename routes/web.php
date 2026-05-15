<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialController;

//Arquivo para a programação das rotas 
//Route::Método da requisição('rota da URL', função que da o retorno da view)

Route::get('/', function (Request $request) {
    //Criando a variavel para a passagem do nome, que acorrerá por uma array
    $nome = $request->nome ?? $nome = "Murilo"; 
    return view('inicial', ["nome" => $nome]);
});

//Rota que recebe os dados via post
Route::post("/", function(Request $request){
    $nome = $request->nome;
    return view('inicial', ["nome" => $nome]);
});

Route::get('/sobre', function(){
    return view('sobre');
});

Route::get('/sign-in', function(){
    return view('Auth/signIn');
});

Route::post('/sign-in', [UserController::class, 'store']);

//Rotas do material
Route::get('/materials/new', [MaterialController::class, 'create']);

Route::post('/materials/new', [MaterialController::class, 'store']);