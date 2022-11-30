<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Orcamento;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use Spatie\FlareClient\Http\Client;

class TelaAdminController extends Controller
{
   public function index()
   {
    $clientes = Cliente::all()->sortBy('nome');
    $orcamentos = Orcamento::all();
    $totalOrcamentos = Orcamento::all()->count();

    return view('tela_admin.index', compact('clientes', 'orcamentos', 'totalOrcamentos'));
   }
}
