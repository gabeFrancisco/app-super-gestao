<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Heaven',
                'status' => 'S',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '51',
                'telefone' => '33377777'
            ],
            1 => [
                'nome' => 'Earth',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '47',
                'telefone' => '99322233'
            ],
            2 => [
                'nome' => 'E-Corp',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '01',
                'telefone' => '333777'
            ]
        ];

        

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}