<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocioeconomicRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socioeconomic_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('householder_id');
            $table->boolean('beneficiario')->default(FALSE);
            $table->string('programas');
            $table->boolean('beneficiario_fterra')->default(FALSE);
            $table->string('beneficiario_fterra_desc');
            $table->string('moradia');
            $table->string('tipo_domicilio');
            $table->integer('qtd_comodos');
            $table->string('obs_moradia')->nullable();
            $table->string('material_moradia');
            $table->string('material_moradia_cobertura');
            $table->string('agua_moradia');
            $table->string('iluminacao_moradia');
            $table->string('preparacao_alimentos');
            $table->string('banheiro');
            $table->string('destino_dejetos');
            $table->string('equipamentos_banheiro');
            $table->string('eletrodomesticos');
            $table->string('destino_lixo');
            $table->string('uso_substancia');
            $table->string('curso_desejado');
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
        Schema::dropIfExists('socioeconomic_registers');
    }
}
