<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all()->sortBy('nome');
        return view('servicos.index', compact('produtos'));
    }

    public function detalhes()
    {
        return view('servicos.detalhes');
    }
}
