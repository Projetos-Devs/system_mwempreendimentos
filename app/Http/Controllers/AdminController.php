<?php

namespace App\Http\Controllers;

//use App\Models\Cliente;
use App\Models\Municipio;
use App\Models\Orcamento;
use App\Models\Produto;
use App\Models\Uf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{


   public function __construct()
    
   {

       $this->middleware('auth');

   }


   public function index()
   {
      //$totalClientes = Cliente::all()->count();
      $totalOrcamentos = Orcamento::all()->count();
      $totalProdutos = Produto::all()->count();
      return view('admin.dashboards.index', compact( 'totalProdutos', 'totalOrcamentos'));
   }

   // public function detalhescliente()
   //  {
       
    
   //     $clientes = Cliente::all()->sortBy('nome');
 
   //     return view('admin.clientes.detalhes', compact('clientes'));
   //  }


    public function detalhesorcamento()
    {
 
       $orcamentos = Orcamento::all()->sortBy('status');
       $totalOrcamentos = Orcamento::all()->count();
 
       return view('admin.orcamentos.detalhes', compact( 'orcamentos', 'totalOrcamentos'));
    }



    
    public function editorcamento($id)
    {
       $municipios = Municipio::all();
       $produtos = Produto::all();
        $ufs = Uf::all();
        //$clientes = Cliente::all();
        $orcamento = Orcamento::find($id);
       return view('admin.orcamentos.edit', compact('orcamento', 'municipios', 'ufs', 'produtos'));
        
    }
    


    public function updateorcamento(Request $request, $id)
    {

        $input = $request->toArray();
       $orcamento = Orcamento::find($id);

       $listaProdutos = '';
        $listaqtds = '';

        foreach($input['qtds'] AS $qtds) {
            $listaqtds .= "".$qtds."";
            
        }
        

        foreach($input['produtos'] AS $produtos){
            $listaProdutos .= "".$produtos." - Qtd: $listaqtds ;";

        }


        $listaProdutos .= '';
        $listaqtds .= '';

        $input['produtos'] = $listaProdutos;
        $input['qtds'] = $listaqtds;
    
       
       $orcamento->fill($input);
       $orcamento->save();
       return redirect()->route('orcamentos.detalhesorcamento')->with('sucesso', 'Orçamento alterado com sucesso');
        
    }


    public function destroyorcamento($id)
    {
        
        $orcamento = Orcamento::find($id);
        $orcamento->delete();
        return redirect()->route('orcamentos.detalhesorcamento')->with('sucesso','Orçamento deletado com sucesso!');;


    }


}
