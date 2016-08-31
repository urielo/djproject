<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'cidade',
        'bairro',
        'estado',
        'tipo',
        'lat',
        'long',

    ];

    public function cliente(){
        return $this->belongsTo('App\Model\Cliente');
    }
}
