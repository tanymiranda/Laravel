<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class FinanceiroController extends Controller
{
    // Função que exibe a lista de contas
    public function index() {
        $contas = new Conta();
        $contas = $contas->listar();  // Pega as contas do modelo
        return view('financeiro.index', compact('contas'));  // Passa para a view
    }
    public function create()
    {
        return view('financeiro.create');  // Exibe a view de criação de usuário
    }
    // Função para cadastrar uma nova conta
    public function store(Request $request) {
        // Exibe os dados que foram enviados no formulário
        return view('financeiro.store', ['dados' => $request->all()]);
    }

    // Função para exibir a lista de contas na página inicial
    public function home() {
        $contas = new Conta();
        $contas = $contas->listar();  // Pega as contas do modelo
        return view('home', compact('contas'));  // Passa para a view 'home'
    }
}
