<?php

use App\Http\Controllers\AdminController;
//use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ServicosController;
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




//ROTAS DO ADMIN

Route::get('/dashboards', [AdminController::class, 'index'])->name('dashboards.index');

//LOGIN

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');


//ROTAS DOS USUARIOS

Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');




//ROTAS DE PRODUTOS

Route::get('/produtos/detalhes', [ProdutosController::class, 'detalhes'])->name('produtos.detalhes');

Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');

Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');

Route::get('/produtos/edit/{id}', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::put('/produtos/produto/{id}', [ProdutosController::class, 'update'])->name('produtos.update');

Route::delete('/produtos/{id}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');




//ROTAS DE ORÇAMENTO


Route::get('/orcamentos/detalhes', [AdminController::class, 'detalhesorcamento'])->name('orcamentos.detalhesorcamento');

Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamentos.index');

Route::post('/orcamentos', [OrcamentoController::class, 'store'])->name('orcamentos.store');

Route::get('/orcamentos/edit/{id}', [AdminController::class, 'editorcamento'])->name('orcamentos.editorcamento');

Route::put('/orcamentos/orcamento/{id}', [AdminController::class, 'updateorcamento'])->name('orcamentos.updateorcamento');

Route::delete('/orcamentos/{id}', [AdminController::class, 'destroyorcamento'])->name('orcamentos.destroyorcamento');



//ROTAS DE CLIENTE

// Route::get('/clientes/detalhes', [AdminController::class, 'detalhescliente'])->name('clientes.detalhescliente');

// Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

// Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

// Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');



//ROTAS DE CONTATO

Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos.index');


//ROTAS DE SERVIÇOS

Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');

Route::get('/servicos/detalhes/{id}', [ServicoController::class, 'detalhes'])->name('servicos.detalhes');

Route::put('/servicos/produto/{id}', [ServicoController::class, 'update'])->name('servicos.update');

//ROTAS DE SOBRE

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre.index');