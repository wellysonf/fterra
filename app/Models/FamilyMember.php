<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $fillable = [
        'householder_id',
        'nome',
        'nascimento',
        'cpf',
        'parentesco',
        'profissao',
        'escolaridade',
        'renda',
    ];
}
