<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = [
        'nome', 'valor', 'descricao', 'quantidade',
    ];
    public $timestamps = false;
}
