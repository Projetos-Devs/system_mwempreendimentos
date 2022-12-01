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
        $produtos = Produto::all()->sortBy('nome');
        
        return view('orcamentos.index', compact('municipios', 'ufs', 'produtos'));
    }



    public function store(Request $request)
    {
        $input = $request->toArray(); // Recebe um array com os campos do formulário

        $listaProdutos = '<ul>';

        foreach($input['produtos'] AS $produtos){
            $listaProdutos .= "<li>".$produtos." - Qtd: ???</li>";
        }

        $listaProdutos .= '</ul>';

        $input['produtos'] = $listaProdutos;
    
        Orcamento::create($input);

        return redirect()->route('orcamentos.index');
    }

    
}
