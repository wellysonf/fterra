<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Householder::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        /* 'email' => $faker->unique()->safeEmail, */
        'nascimento'  => $faker->date('Y-m-d','now'),
        'rg'  => $faker->randomNumber(5),
        'cpf'  => $faker->randomNumber(5),
        'escolaridade'  => $faker->randomElement(array('Fundamental Completo','Médio Completo','Superior Incompleto','Superior Completo','Pós-graduação (Lato senso) Completo')),
        'profissao'  => $faker->jobTitle,
        'conjuge'  => $faker->name,
        'pai'  => $faker->name,
        'mae'  => $faker->name,
        'endereco'  => $faker->streetName,
        'endereco_num'  => $faker->buildingNumber,
        'endereco_complemento'  => $faker->secondaryAddress,
        'bairro'  => $faker->streetSuffix,
        'cidade'  => $faker->city,
        'cep'  => $faker->postcode,
        'uf'  => $faker->stateAbbr,
        'tel1'  => $faker->tollFreePhoneNumber,
        'tel2'  => $faker->tollFreePhoneNumber,
        'qtd_moradores'  => $faker->randomDigitNotNull,
        'qtd_criancas'  => $faker->randomDigitNotNull,
        'qtd_estudantes'  => $faker->randomDigitNotNull,
        'qtd_trabalhadores'  => $faker->randomDigitNotNull,
        'renda_familiar'  => $faker->randomFloat(2,0,6),
        'renda_per_capita'  => $faker->randomFloat(2,0,6),
        'obs'  => $faker->text(180),
    ];
});
