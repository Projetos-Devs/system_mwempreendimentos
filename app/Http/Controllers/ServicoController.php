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





    public function detalhes($id)
    {
        $servicos = Produto::all();
        $produto = Produto::find($id);

       return view('servicos.detalhes', compact('produto', 'servicos'));
    }


    public function update(Request $request, $id)
    {
       $input = $request->toArray();
       $produto = Produto::find($id);
 
       $produto->fill($input);
       $produto->save();
    }
}



