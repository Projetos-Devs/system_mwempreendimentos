<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Orcamento;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{

   public function index()
   {
      $totalClientes = Cliente::all()->count();
      $totalOrcamentos = Orcamento::all()->count();
      $totalProdutos = Produto::all()->count();
      return view('admin.dashboards.index', compact('totalClientes', 'totalOrcamentos', 'totalProdutos'));
   }

}
