<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Orcamento;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use Spatie\FlareClient\Http\Client;

class TelaAdminController extends Controller
{
   public function clientes()
   {
    $clientes = Cliente::all()->sortBy('nome');
    $orcamentos = Orcamento::all();
    $totalOrcamentos = Orcamento::all()->count();

    return view('telas_admin.clientes', compact('clientes', 'orcamentos', 'totalOrcamentos'));
   }

   public function orcamentos()
   {
    $clientes = Cliente::all()->sortBy('nome');
    $orcamentos = Orcamento::all();
    $totalOrcamentos = Orcamento::all()->count();

    return view('telas_admin.orcamentos', compact('clientes', 'orcamentos', 'totalOrcamentos'));
   }
}
