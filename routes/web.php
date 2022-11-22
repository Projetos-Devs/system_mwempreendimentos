<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrcamentoController;
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


//ROTAS DE LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

//ROTAS DE USUARIO
Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuario.create');

//ROTAS DE CONTATO
Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');

//ROTASA DE ORÇAMENTO
Route::get('/orcamento', [OrcamentoController::class, 'index'])->name('orcamento.index');