<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('householders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('nascimento');
            $table->string('rg');
            $table->string('cpf');
            $table->string('escolaridade');
            $table->string('profissao');
            $table->string('conjuge');
            $table->string('pai');
            $table->string('mae');
            $table->string('endereco');
            $table->string('endereco_num');
            $table->string('endereco_complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf');
            $table->string('tel1');
            $table->string('tel2');
            $table->integer('qtd_moradores');
            $table->integer('qtd_criancas');
            $table->integer('qtd_estudantes');
            $table->integer('qtd_trabalhadores');
            $table->float('renda_familiar');
            $table->float('renda_per_capita');
            $table->text('obs');
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
        Schema::dropIfExists('householders');
    }
}
