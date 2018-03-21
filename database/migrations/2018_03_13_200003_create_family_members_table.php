<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMembersTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('householder_id')->unsigned();;
            $table->string('nome');
            $table->date('nascimento');
            $table->string('cpf');
            $table->string('parentesco');
            $table->string('profissao');
            $table->string('escolaridade');
            $table->float('renda');
            $table->timestamps();
            $table->foreign('householder_id')->references('id')->on('householders')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_members');
    }
}
