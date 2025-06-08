<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => ['id' => '1', 'nome' => 'Fornecedor 1', 'cnpj' => '00.000.00/000-00', 'status' => 'true'],
            1 => ['id' => '2', 'nome' => 'Fornecedor 2', 'cpf' => '000.000.000-00', 'status' => 'true'],
            3 => ['id' => '3', 'nome' => 'Fornecedor 3', 'cpf' => '000.000.000-00', 'status' => 'false'],
            4 => ['id' => '4', 'nome' => 'Fornecedor 4', 'cnpj' => '00.000.00/000-00', 'status' => 'true'],
            5 => ['id' => '5', 'nome' => 'Fornecedor 5', 'cpf' => '000.000.000-00', 'status' => 'true'],
        ];
        return view("app.fornecedor", compact("fornecedores"));
    }
}
