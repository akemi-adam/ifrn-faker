<?php

use AkemiAdam\IfrnFaker\Faker;

uses()->group('student');

$faker = new Faker;

it('can returns a random enrolment', function () use ($faker)
{
    expect($faker->student()->enrolment())
        ->toBeString()
        ->toBeNumeric()
        ->toHaveLength(14);
});

it('can returns a random period', function () use ($faker)
{
    expect($faker->student()->period())
        ->toBeInt()
        ->toBeIn([1, 2, 3, 4]);
});

it('can returns a random period with max limit specified', function () use ($faker)
{
    expect($faker->student()->period(8))
        ->toBeInt()
        ->toBeIn([1, 2, 3, 4, 5, 6, 7, 8]);
});

it('can returns a random birthdate of 16 years ago', function () use ($faker)
{
    $date = $faker->student()->birthdate();

    $year = intval(explode('/', $date)[2]);

    $minimalYear = intval(date('Y')) - 16;

    expect($date)
        ->toBeString()
        ->toMatch('/^[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}$/');

    expect($year)
        ->toBeInt()
        ->toBeLessThanOrEqual($minimalYear);
});

it('can returns a random ira', function () use ($faker)
{
    expect($faker->student()->ira())
        ->toBeNumeric()
        ->toBeLessThanOrEqual(100)
        ->toBeGreaterThanOrEqual(0);
});

it('can returns a random status fingerprint', function () use ($faker)
{
    expect($faker->student()->fingerprint())
        ->toBeString()
        ->toBeIn(['Sim', 'Não']);
});

it('can returns a random status for diploma issue', function () use ($faker)
{
    expect($faker->student()->issuedDiploma())
        ->toBeString()
        ->toBeIn(['Sim', 'Não']);
});

it('can returns a random shift', function () use ($faker)
{
    expect($faker->student()->shift())
        ->toBeString()
        ->toBeIn(['Matutino', 'Vespertino', 'Noturno']);
});