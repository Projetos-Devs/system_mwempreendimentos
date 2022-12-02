<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view("produtos.index", compact('produtos'));
    }

    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('sucesso', 'Produto deletado com sucesso');
    }

    public function create()
    {
        $produtos = Produto::all()->sortBy('nome');
        return view("produtos.create", compact('produtos'));

        return redirect()->route('produtos.index')->with('sucesso', 'Produto cadastrado com sucesso');
    }

    public function edit($id){
        $produtos = Produto::find($id);
        return view('produtos.edit', compact('produtos'));
    }

    public function update(Request $request, $id){
        $input = $request->toArray();
        $produtos = Produto::find($id);

        $produtos->fill($input);
        $produtos->save();
        return redirect()->route('produtos.index')->with('sucesso', 'Produto alterado com sucesso');
    }

}