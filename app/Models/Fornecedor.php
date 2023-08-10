<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'uf',
        'email',
    ];

    protected $table = 'fornecedores';

    public function produtos(){
        return $this->hasMany(Produto::class, 'id_fornecedor');
    }
}
