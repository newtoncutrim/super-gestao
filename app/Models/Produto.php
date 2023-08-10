<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = [
        'nome',
        'descricao',
        'peso',
        'preco_venda',
        'estoque_min',
        'estoque_max',
        'id_fornecedor',
        'id_detalhe'
    ];
     
    public function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor');
    }

    public function unidades(){
        return $this->belongsTo(Unidade::class, 'id_unidade');
    }
}
