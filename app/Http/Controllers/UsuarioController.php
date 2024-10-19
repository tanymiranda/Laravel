<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Método para exibir a lista de usuários
    public function index()
    {
        $usuarios = new Usuario();
        $usuarios = $usuarios->listar();  // Chama a função listar da model
        return view('usuarios.index', compact('usuarios'));  // Passa os usuários para a view
    }
        // Método para exibir o formulário de cadastro de usuário
        public function create()
        {
            return view('usuarios.create');  // Exibe a view de criação de usuário
        }
    
        // Método para processar os dados do formulário
        public function store(Request $request)
        {
            // Exibe os dados recebidos via POST
            return view('usuarios.store', ['dados' => $request->all()]);
        }
    }

