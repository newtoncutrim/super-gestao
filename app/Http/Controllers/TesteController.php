<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(){

        $nome = 'newtex';
        return view('site.teste')->with('nome', $nome);
        /* $nome = 'newton';
        $lasName = 'cutrim';
        return view('site.teste', compact('nome', 'lasName')); */

        /* return view('site.teste', ['data' => 'teste de dados para view']); */
    }

    public function sintaxe(){
        return view('site.sintaxe');
    }
}
