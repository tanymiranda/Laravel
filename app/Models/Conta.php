<?php

namespace App\Models;

class Conta
{
    public static function listar()
    {
        return [
            (object) ['id' => 1, 'descricao' => 'Conta de Luz', 'valor' => 100, 'tipo' => 'A Pagar'],
            (object) ['id' => 2, 'descricao' => 'Conta de Internet', 'valor' => 150, 'tipo' => 'A Pagar'],
            (object) ['id' => 3, 'descricao' => 'Venda Produto A', 'valor' => 200, 'tipo' => 'A Receber'],
            (object) ['id' => 4, 'descricao' => 'Venda Produto B', 'valor' => 250, 'tipo' => 'A Receber'],
            (object) ['id' => 5, 'descricao' => 'Pagamento de Salário', 'valor' => 1500, 'tipo' => 'A Pagar'],
            (object) ['id' => 6, 'descricao' => 'Serviço de Consultoria', 'valor' => 300, 'tipo' => 'A Receber'],
            (object) ['id' => 7, 'descricao' => 'Compra de Materiais', 'valor' => 400, 'tipo' => 'A Pagar'],
            (object) ['id' => 8, 'descricao' => 'Pagamento de Aluguel', 'valor' => 1200, 'tipo' => 'A Pagar'],
            (object) ['id' => 9, 'descricao' => 'Venda Produto C', 'valor' => 500, 'tipo' => 'A Receber'],
            (object) ['id' => 10, 'descricao' => 'Pagamento de Impostos', 'valor' => 800, 'tipo' => 'A Pagar']
        ];
    }
}
