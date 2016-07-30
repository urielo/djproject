<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnpjTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnpj', function (Blueprint $table) {
            $table->increments('id');
            $table->string('incricao',14)->unique();
            $table->timestamp('dt_abertura');
            $table->string('rz_social',150);
            $table->string('fantasia',150);
            $table->string('cod_atv_principal');
            $table->string('cod_atv_secundarias');
            $table->string('natu_juridica');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('cep',10);
            $table->string('bairro');
            $table->string('municipio');
            $table->string('uf',2);
            $table->string('email');
            $table->string('tel');
            $table->string('efr');
            $table->string('sit_cadastral');
            $table->date('dt_sit_cadastral');
            $table->string('mt_sit_cadastral');
            $table->string('st_especial');
            $table->string('dt_st_especial');
            $table->integer('cliente_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cnpj');
    }
}
