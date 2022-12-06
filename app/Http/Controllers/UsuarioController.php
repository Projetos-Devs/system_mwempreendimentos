<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    
    public function create()
    {

        return view('admin.usuarios.create');
    }


    public function store(Request $request)
    {
        //dd($request);
        $input = $request->toArray();
        $input['password'] = bcrypt($input['password']);

        User::create($input);

        return redirect()->route('dashboards.index')->with('sucesso', 'Bem Vindo!!');
    }
}
