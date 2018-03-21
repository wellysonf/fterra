<?php

use Faker\Generator as Faker;

$factory->define(App\Models\FamilyMember::class, function (Faker $faker) {
    return [
        'householder_id'  => $faker->numberBetween(1,220),
        'nome'  => $faker->name,
        'nascimento'  => $faker->date('Y-m-d','now'),
        'cpf'  => $faker->randomNumber(7),
        'parentesco'  => $faker->randomElement(array('Pai','Mãe','Filho','Irmão')),
        'profissao'  => $faker->jobTitle,
        'escolaridade'  => $faker->randomElement(array('Fundamental Completo','Médio Completo','Superior Incompleto','Superior Completo','Pós-graduação (Lato senso) Completo')),
        'renda'  => $faker->randomFloat(2,0,6),

    ];
});
