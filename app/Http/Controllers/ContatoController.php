<?php

namespace App\Http\Controllers;

use Faker\Core\Number;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $r) {
        
        return view('site.contato');
    }
    

    
}
