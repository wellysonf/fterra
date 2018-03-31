<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocioeconomicRegister extends Model
{
    protected $fillable = [
        'householder_id',
        'beneficiario',
        'programas',
        'beneficiario_fterra',
        'beneficiario_fterra_desc',
        'moradia',
        'tipo_domicilio',
        'qtd_comodos',
        'obs_moradia',
        'material_moradia',
        'material_moradia_cobertura',
        'agua_moradia',
        'iluminacao_moradia',
        'preparacao_alimentos',
        'banheiro',
        'destino_dejetos',
        'equipamentos_banheiro',
        'eletrodomesticos',
        'destino_lixo',
        'uso_substancia',
        'curso_desejado',
    ];
}
