<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class FinanceiroController extends Controller
{
    public function index() {
        $contas = new Conta();
        $contas = $contas->listar();  
        return view('financeiro.index', compact('contas')); 
    }
    public function create()
    {
        return view('financeiro.create');  
    }

    public function store(Request $request) {
        return view('financeiro.store', ['dados' => $request->all()]);
    }

   
    public function home() {
        $contas = new Conta();
        $contas = $contas->listar(); 
        return view('home', compact('contas'));  
    }
}
