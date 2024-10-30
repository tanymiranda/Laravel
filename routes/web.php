<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;

//definindo a rota para a raiz do site
Route::get('/', function (){
    return redirect('/home');
});
Route::get('/home', [HomeController::class, 'index']);

Route::get('/financeiro', [FinanceiroController::class, 'index']);  // Exibe a lista de contas
Route::get('/financeiro/cadastrar', [FinanceiroController::class, 'create']); // Exibe o formulário para cadastrar nova conta
Route::post('/financeiro', [FinanceiroController::class, 'store']);  // Recebe/processa os dados do formulário

Route::get('/usuarios', [UsuarioController::class, 'index']);  // Exibe a lista de usuários
Route::get('/usuarios/cadastrar', [UsuarioController::class, 'create']); // Exibe o formulário para cadastrar um novo usuário
Route::post('/usuarios', [UsuarioController::class, 'store']); // Processa os dados recebidos do formulário
