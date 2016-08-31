<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [

        'nome',

    ];

    /**
     * @return array
     */
    public function cnpjs()
    {
        return $this->hasMany('App\Models\Cnpj');
    }
    public function contatos()
    {
        return $this->hasMany('App\Models\Contato');
    }
    public function tarefas()
    {
        return $this->hasMany('App\Models\Tarefa');
    }
    public function enderecos()
    {
        return $this->hasMany('App\Models\Endereco');
    }
}
