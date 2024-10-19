<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $contas = [
            (object) ['id' => 1, 'descricao' => 'Conta de Luz', 'valor' => 100, 'tipo' => 'A Pagar'],
            (object) ['id' => 2, 'descricao' => 'Conta de Água', 'valor' => 50, 'tipo' => 'A Pagar'],
            (object) ['id' => 3, 'descricao' => 'Salário', 'valor' => 5000, 'tipo' => 'A Receber'],
            (object) ['id' => 4, 'descricao' => 'Freelance', 'valor' => 200, 'tipo' => 'A Receber'],
            (object) ['id' => 5, 'descricao' => 'Internet', 'valor' => 150, 'tipo' => 'A Pagar'],
            (object) ['id' => 6, 'descricao' => 'Manutenção', 'valor' => 300, 'tipo' => 'A Pagar'],
            (object) ['id' => 7, 'descricao' => 'Venda de Produto', 'valor' => 1000, 'tipo' => 'A Receber'],
            (object) ['id' => 8, 'descricao' => 'Consultoria', 'valor' => 800, 'tipo' => 'A Receber'],
            (object) ['id' => 9, 'descricao' => 'Impostos', 'valor' => 1200, 'tipo' => 'A Pagar'],
            (object) ['id' => 10, 'descricao' => 'Aluguel', 'valor' => 2000, 'tipo' => 'A Pagar']
        ];

        $usuarios = [
            (object) ['id' => 1, 'nome' => 'João', 'cargo' => 'Desenvolvedor', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 2, 'nome' => 'Maria', 'cargo' => 'Designer', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 3, 'nome' => 'José', 'cargo' => 'Gerente', 'escolaridade' => 'Ensino Médio'],
            (object) ['id' => 4, 'nome' => 'Ana', 'cargo' => 'Estagiário', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 5, 'nome' => 'Carlos', 'cargo' => 'Tester', 'escolaridade' => 'Ensino Médio'],
            (object) ['id' => 6, 'nome' => 'Fernanda', 'cargo' => 'Analista', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 7, 'nome' => 'Lucas', 'cargo' => 'Programador', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 8, 'nome' => 'Juliana', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
            (object) ['id' => 9, 'nome' => 'Roberto', 'cargo' => 'CEO', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 10, 'nome' => 'Patrícia', 'cargo' => 'Coordenadora', 'escolaridade' => 'Ensino Superior']
        ];

        return view('home', compact('contas', 'usuarios'));
    }
}
