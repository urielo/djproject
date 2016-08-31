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
        Schema::create('cnpjs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->string('inscricao',14)->unique();
            $table->timestamp('dt_abertura');
            $table->string('rz_social');
            $table->string('fantasia')->nullable();
            $table->string('cod_atv_principal')->nullable();
            $table->string('cod_atv_secundarias')->nullable();
            $table->string('natu_juridica')->nullable();
            $table->string('logradouro')->nullable();
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cep',10)->nullable();
            $table->string('bairro')->nullable();
            $table->string('municipio')->nullable();
            $table->string('uf')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->string('efr')->nullable();
            $table->string('sit_cadastral')->nullable();
            $table->date('dt_sit_cadastral')->nullable();
            $table->string('mt_sit_cadastral')->nullable();
            $table->string('st_especial')->nullable();
            $table->string('dt_st_especial')->nullable();
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
