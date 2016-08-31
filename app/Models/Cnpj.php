<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cnpj extends Model
{
    protected $fillable = [
        'inscricao',
        'dt_abertura',
        'rz_social',
        'fantasia',
        'cod_atv_principal',
        'cod_atv_secundarias',
        'natu_juridica',
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'municipio',
        'uf',
        'email',
        'tel',
        'efr',
        'sit_cadastral',
        'dt_sit_cadastral',
        'mt_sit_cadastral',
        'st_especial',
        'dt_st_especial',
    ];

    /**
     * @return array
     */
    public function Cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }
}

