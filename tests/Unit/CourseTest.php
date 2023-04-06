<?php

use AkemiAdam\IfrnFaker\Faker;

uses()->group('course');

$faker = new Faker;

it('can return a random integrated course name', function () use ($faker)
{
    $courses = [
        'Agroecologia', 'Administração', 'Agricultura', 'Agropecuária', 'Alimentos',
        'Apicultura', 'Biocombustíveis', 'Comércio', 'Controle Ambiental', 'Cooperativismo',
        'Edificações', 'Eletrônica', 'Eletrotécnica', 'Eletromecânica', 'Equipamentos Biomédicos',
        'Eventos', 'Geologia', 'Informática', 'Informática para internet', 'Jogos Digitais',
        'Lazer', 'Logística', 'Manutenção e Suporte em Informática', 'Mecânica', 'Mecatrônica',
        'Meio Ambiente', 'Mineração', 'Multimídia', 'Química', 'Recursos Pesqueiros',
        'Refrigeração e Climatização', 'Vestuário', 'Zootecnica', 'Têxtil'
    ];

    for ($i = 0; $i < count($courses); $i++)
        $courses[$i] = 'Técnico integrado em ' . $courses[$i];
    
    expect($faker->course()->name())
        ->toBeString()
        ->toBeIn($courses);
});

it('can return a random subsequent course name', function () use ($faker)
{
    $courses = [
        'Administração', 'Agropecuária', 'Alimentos', 'Apicultura', 'Biocombustíveis',
        'Cooperativismo', 'Comércio', 'Controle Ambiental', 'Edificações', 'Equipamentos Biomédicos',
        'Eletrônica', 'Eletrotécnica', 'Estradas', 'Eventos', 'Geologia',
        'Guia de Turismo', 'Informática', 'Instrumento Musical', 'Informática para Internet', 'Logística',
        'Manutenção e Suporte em Informática', 'Mecânica', 'Mecatrônica', 'Meio Ambiente', 'Mineração',
        'Petróleo e Gás', 'Química', 'Redes de Computadores', 'Refrigeração e Climatização', 'Recursos Pesqueiros',
        'Saneamento', 'Secretaria Escolar', 'Segurança do Trabalho', 'Vestuário', 'Zootecnia'
    ];

    for ($i = 0; $i < count($courses); $i++)
        $courses[$i] = 'Técnico subsequente em ' . $courses[$i];
    
    expect($faker->course()->name(false))
        ->toBeString()
        ->toBeIn($courses);
});

it('can return a random code of course with five digits', function () use ($faker)
{
    expect($faker->course()->code())
        ->toBeString()
        ->toHaveLength(5);
});

