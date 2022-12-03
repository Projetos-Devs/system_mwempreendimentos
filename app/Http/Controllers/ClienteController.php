<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{



    public function detalhes()
    {
       $clientes = Cliente::all()->sortBy('nome');
 
       return view('admin.clientes.detalhes', compact('clientes'));
    }


    

    public function index(Request $request)
    {

        return view('clientes.index');

    }

    public function create()
    {

        return view('clientes.create');

    }
    


    public function store(Request $request){

        $input = $request->toArray(); // Recebe um array com os campos do formulário
    
        Cliente::create($input);

        return redirect()->route('orcamentos.index');


    }
}
