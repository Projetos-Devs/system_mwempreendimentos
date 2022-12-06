<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{

   public function __construct()
    
    {

        $this->middleware('auth');

    }


    public function detalhes()
    {
       $produtos = Produto::all();
       return view('admin.produtos.detalhes', compact('produtos'));
 
    }
 
 
    public function create()
    {
       $produtos = Produto::all()->sortBy('nome');
       return view('admin.produtos.create', compact('produtos'));
 
       return redirect()->route('produtos.detalhes')->with('sucesso', 'Produto cadastrado com sucesso');
    }
 
 
 
    public function edit($id)
    {
       $produto = Produto::find($id);
       return view('admin.produtos.edit', compact('produto'));
 
    }
 
 
    public function update(Request $request, $id)
    {
       $input = $request->toArray();
       $produto = Produto::find($id);
 
       $produto->fill($input);
       $produto->save();
       return redirect()->route('produtos.detalhes')->with('sucesso', 'Produto alterado com sucesso');
    }


    

    public function store(Request $request){

        $input = $request->toArray(); // Recebe um array com os campos do formulário

        Produto::create($input);

        return redirect()->route('produtos.detalhes');


    }


    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.detalhes');
    }

}