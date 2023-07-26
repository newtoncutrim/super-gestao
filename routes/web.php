<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use App\Http\Middleware\VerifyCsrfToken;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobre', [SobrenosController::class, 'sobrenos'])->name('site.sobre');

Route::prefix('/app')->group(function(){
    Route::get('login', function(){return 'login'; })->name('app.login');
    Route::get('/clientes', function (){return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos'; })->name('app.produtos');
});

/* Route::get('/contato/{id?}/{name?}', [ContatoController::class, 'contato_para'])->where('id', '[0-9]+')->where('name', '[A-Za-z]+'); */

/* Route::get('/teste1', function(){return 'teste1';})->name('site.teste1');
Route::get('/teste2', function()
{return 'oi';})
->name('site.teste2');

Route::redirect('/teste2', '/teste1'); */

Route::fallback(function(){
    return view('site.erro');
    /* return 'pagina nao encontrada clik <a href="'.route('site.index').'">aqui</a>'; */
});