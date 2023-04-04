<?php

use AkemiAdam\IfrnFaker\Faker;

uses()->group('campus');

it('returnas a random campus', function ()
{
    $faker = new Faker;

    expect($faker->campus()->name())
        ->toBeString()
        ->toBeIn([
            'Apodi', 'Caicó', 'Canguaretama', 'Ceará-Mirim',
            'Currais Novos', 'Ipanguaçu', 'João Câmara', 'Jucurutu',
            'Lajes', 'Macau', 'Mossoró', 'Natal-Central',
            'Natal-Cidade Alta', 'Natal-Zona Leste', 'Natal-Zona Norte', 'Nova Cruz',
            'Parelhas', 'Parnamirim', 'Pau dos Ferros', 'Santa Cruz',
            'São Gonçalo do Amarante', 'São Paulo do Potengi'
        ]);
});