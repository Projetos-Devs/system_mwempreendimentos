<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\User;
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
        $users = User::all();
       $produtos = Produto::all()->sortBy('nome');
       return view('admin.produtos.create', compact('produtos', 'users'));
 
       return redirect()->route('produtos.detalhes')->with('sucesso', 'Produto cadastrado com sucesso');
    }
 
 
 
    public function edit($id)
    {
        $users = User::all();
       $produto = Produto::find($id);
       return view('admin.produtos.edit', compact('produto', 'users'));
 
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

        $input = $request->toArray(); // Recebe um array com os campos do formulário
        if(!empty($input['foto'] && $input['foto']->isValid()))
        {
            $nomeArquivo = $input['foto']->hashName(); //Obtém a hash do nome do arquivo 
            $input['foto']->store('public/produtos'); //upload da foto em uma pasta
            $input['foto'] = $nomeArquivo; // Guardar o nome do arquivo
        }else{
            $input['foto'] = null;
        }



        Produto::create($input);

        return redirect()->route('produtos.detalhes');


    }


    public function destroy($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.detalhes');
    }

}