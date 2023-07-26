<?php

namespace App\Http\Controllers;

use Faker\Core\Number;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() {
        return view('site/contato');
    }

    public function contato_para(Request $r, $id = 1, $name = 'new') {

        return dd($id, $name);
    }
}
