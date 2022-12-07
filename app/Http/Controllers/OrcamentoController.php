<?php

namespace App\Http\Controllers;

//use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Municipio;
use App\Models\Orcamento;
use App\Models\Uf;
use Illuminate\Http\Request;
use Iluminate\Support\Facades\Storage;

class OrcamentoController extends Controller
{


//     public function detalhes()
//    {

//       $clientes = Cliente::all();
//       $orcamentos = Orcamento::all()->sortBy('status');
//       $totalOrcamentos = Orcamento::all()->count();

//       return view('admin.orcamentos.detalhes', compact('clientes', 'orcamentos', 'totalOrcamentos'));
//    }



    public function index(Request $request)
    {
//$clientes = Cliente::all();
        $municipios = Municipio::all()->sortBy('nome');
        $ufs = Uf::all()->sortBy('sigla');
        $produtos = Produto::all()->sortBy('nome');
        
        return view('orcamentos.index', compact('municipios', 'ufs', 'produtos'));
    }





    // public function edit($id)
    // {
    //    $municipios = Municipio::all();
    //    $produtos = Produto::all();
    //     $ufs = Uf::all();
    //     $users = User::all();
    //     $clientes = Cliente::all();
    //     $orcamento = Orcamento::find($id);
    //    return view('admin.orcamentos.edit', compact('orcamento', 'clientes', 'users', 'municipios', 'ufs', 'produtos'));
        
    // }
    


    // public function update(Request $request, $id)
    // {

    //     $input = $request->toArray();
    //    $orcamento = Orcamento::find($id);
       
    //    $orcamento->fill($input);
    //    $orcamento->save();
    //    return redirect()->route('orcamentos.detalhes')->with('sucesso', 'Orçamento alterado com sucesso');
        
    // }


    // public function destroy($id)
    // {
        
    //     $orcamento = Orcamento::find($id);
    //     $orcamento->delete();
    //     return redirect()->route('orcamentos.detalhes');


    // }



    public function store(Request $request)
    {
        $input = $request->toArray(); // Recebe um array com os campos do formulário

        $listaProdutos = '<ul>';

        foreach($input['produtos'] AS $produtos){
            $listaProdutos .= "<li>".$produtos." - Qtd: </li>";
        }

        $listaProdutos .= '</ul>';

        $input['produtos'] = $listaProdutos;
    
        Orcamento::create($input);

        return redirect()->route('orcamentos.index')->with('sucesso', 'Orçamento Realizado com sucesso! Entraremos em contato');;
    }

    
}
