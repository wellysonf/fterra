<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $fillable = [
        'id_householder',
        'nome',
        'nascimento',
        'cpf',
        'parentesco',
        'profissao',
        'escolaridade',
        'renda',
    ];
}
