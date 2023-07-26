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

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobre', [SobrenosController::class, 'sobrenos']);

Route::get('/contato/{id?}/{name?}', [ContatoController::class, 'contato_para'])->where('id', '[0-9]+')->where('name', '[A-Za-z]+');