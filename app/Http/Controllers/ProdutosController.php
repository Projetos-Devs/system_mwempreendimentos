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
        $produtos = Produto::find($id);
        $produtos->delete();
        return redirect()->route('produtos.index')->with('sucesso', 'Produto deletado com sucesso');
    }

    public function create()
    {
        $produtos = Produto::all()->sortBy('nome');
        return view("produtos.create", compact('produtos'));
    }
}