<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'preco_venda',
        'estoque_min',
        'estoque_max',
        'id_fornecedor'
    ];
     
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor');
    }
}
