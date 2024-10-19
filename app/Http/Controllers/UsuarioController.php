<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = new Usuario();
        $usuarios = $usuarios->listar();  
        return view('usuarios.index', compact('usuarios'));  
    }
        
        public function create()
        {
            return view('usuarios.create');  
        }
    
        
        public function store(Request $request)
        {
           
            return view('usuarios.store', ['dados' => $request->all()]);
        }
    }

