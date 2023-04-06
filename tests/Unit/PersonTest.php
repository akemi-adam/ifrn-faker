<?php

use AkemiAdam\IfrnFaker\Faker;

uses()->group('person');

$faker = new Faker;

it('returns a random name', function () use ($faker)
{
    expect($faker->student()->name())->toBeString();
});

it('returns a random gender', function () use ($faker)
{
    expect($faker->student()->gender())
        ->toBeString()
        ->toBeIn(['Feminino', 'Masculino', 'Não-binário']);
});

it('returns a random school email', function () use ($faker)
{
    expect($faker->student()->schoolEmail())
        ->toBeString()
        ->toContain('@', 'escolar', '.ifrn.edu.br');
});

it('returns a random academic email', function () use ($faker)
{
    expect($faker->student()->academicEmail())
        ->toBeString()
        ->toContain('@', 'academico', '.ifrn.edu.br');
});

it('returns a random blood type with rh factor', function () use ($faker)
{
    expect($faker->student()->bloodType())
        ->toBeString()
        ->toBeIn(['A+', 'AB+', 'B+', 'O+', 'A-', 'AB-', 'B-', 'O-']);
});

it('returns a random telephone', function () use ($faker)
{
    expect($faker->student()->telephone())
        ->toBeString()
        ->toContain('-', '(', ')')
        ->toMatch('/^(?:(?:\+|00)?(55)\s?)?(?:\(?([0-0]?[0-9]{1}[0-9]{1})\)?\s?)??(?:((?:9\d|[2-9])\d{3}\-?\d{4}))$/');
});