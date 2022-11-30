<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\TelaAdminController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/


//ROTA HOME

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//ROTAS DA TELA DE ADMIN
Route::get('/tela_admin', [TelaAdminController::class, 'index'])->name('tela_admin.index');
Route::get('/tela_admin/details', [TelaAdminController::class, 'details'])->name('tela_admin.details');

//ROTAS DE LOGIN
Route::get('/admin', [LoginController::class, 'index'])->name('admin.index');

Route::get('/admin/create', [LoginController::class, 'create'])->name('admin.create');

//Rotas de produtos
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');

Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');

Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

//ROTAS DE CONTATO
Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos.index');

//ROTAS DE ORÇAMENTO
Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamentos.index');

Route::post('/orcamentos', [OrcamentoController::class, 'store'])->name('orcamentos.store');



//ROTAS DE CLIENTE

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
