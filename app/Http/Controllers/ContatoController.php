<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Faker\Core\Number;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $r, SiteContato $contato) {
        
        return view('site.contato');
    }
    

    
}
