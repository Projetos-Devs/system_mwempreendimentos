<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{



    public function index(Request $request)
    {

        return view('clientes.index');

    }

    public function create(Request $request)
    {

        return view('clientes.create');

    }


    public function store(Request $request){

        $input = $request->toArray(); // Recebe um array com os campos do formulário
    
        Cliente::create($input);

        return redirect()->route('clientes.index');


    }
}
