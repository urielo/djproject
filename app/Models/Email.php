<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'email',
        'tipo',
    ];
    
    public function contato(){
       return $this->belongsTo('App\Models\Contato');
    }
}
