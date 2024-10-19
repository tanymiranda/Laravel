<?php

namespace App\Models;

class Usuario
{
    public static function listar()
    {
        return [
            (object) ['id' => 1, 'nome' => 'Maria Silva', 'cargo' => 'Analista', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 2, 'nome' => 'João Souza', 'cargo' => 'Gerente', 'escolaridade' => 'Ensino Médio'],
            (object) ['id' => 3, 'nome' => 'Lucas Pereira', 'cargo' => 'Desenvolvedor', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 4, 'nome' => 'Ana Costa', 'cargo' => 'Designer', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 5, 'nome' => 'Carlos Oliveira', 'cargo' => 'Tester', 'escolaridade' => 'Ensino Médio'],
            (object) ['id' => 6, 'nome' => 'Mariana Gomes', 'cargo' => 'Coordenadora', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 7, 'nome' => 'Roberta Lima', 'cargo' => 'Suporte', 'escolaridade' => ' Ensino Médio'],
            (object) ['id' => 8, 'nome' => 'Eduardo Ferreira', 'cargo' => 'DevOps', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 9, 'nome' => 'Fernanda Rocha', 'cargo' => 'Product Manager', 'escolaridade' => 'Ensino Superior'],
            (object) ['id' => 10, 'nome' => 'Ricardo Alves', 'cargo' => 'Marketing', 'escolaridade' => 'Ensino Médio']
        ];
    }
}
