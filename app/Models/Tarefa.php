<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = [

        
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
}
