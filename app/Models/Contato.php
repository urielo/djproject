<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [

        'nome_contato',
        'departamento',


    ];


    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function telefones()
    {
        return $this->hasMany('App\Models\Telefone');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\Email');
    }
}
