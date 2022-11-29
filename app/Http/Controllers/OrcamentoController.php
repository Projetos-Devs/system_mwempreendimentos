<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Municipio;
use App\Models\Orcamento;
use App\Models\Uf;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Storage;

class OrcamentoController extends Controller
{
    public function index(Request $request)
    {
        $municipios = Municipio::all()->sortBy('nome');
        $ufs = Uf::all()->sortBy('sigla');
        
        return view('orcamento.index', compact('municipios', 'ufs'));
    }



    public function store(Request $request)
    {
        $input = $request->toArray(); // Recebe um array com os campos do formulário
    
        Orcamento::create($input);

        return redirect()->route('orcamento.index');
    }


}
