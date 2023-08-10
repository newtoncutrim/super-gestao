<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    use HasFactory;
    protected $table = 'produto_detalhes';
    protected $fillable = [
        'comprimento',
        'largura',
        'altura',
        'id_detalhe'
    ];

    public function produto(){
        return $this->belongsTo(Produto::class, 'id_produto');
    }

    public function unidade(){
        return $this->belongsTo(Unidade::class, 'id_unidade');
    }
}
