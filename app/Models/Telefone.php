<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'ddd',
        'numero',
        'tipo',
    ];

    public function contato()
    {
        return $this->belongsTo('App\Models\Contato');
    }

}
