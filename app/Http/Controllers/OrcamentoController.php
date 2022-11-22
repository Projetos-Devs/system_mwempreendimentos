<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function index()
    {
        return view('orcamento.index');
    }
}
