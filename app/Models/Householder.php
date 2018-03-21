<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Householder extends Model
{
    protected $fillable = [
        'nome',
        'nascimento',
        'rg',
        'cpf',
        'escolaridade',
        'profissao',
        'conjuge',
        'pai',
        'mae',
        'endereco',
        'endereco_num',
        'endereco_complemento',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'tel1',
        'tel2',
        'qtd_moradores',
        'qtd_criancas',
        'qtd_estudantes',
        'qtd_trabalhadores',
        'renda_familiar',
        'renda_per_capita',
        'obs',
    ];

    public function members()
	{
		return $this->hasMany('App\Models\FamilyMember');
    }
}
