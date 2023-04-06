<?php

use AkemiAdam\IfrnFaker\Faker;

uses()->group('teacher');

$faker = new Faker;

it('can returns a random teacher enrolment that is numeric, has 7 digits and does not start with 0', function () use ($faker)
{
    expect($faker->teacher()->enrolment())
        ->not->toStartWith(0)
        ->toBeNumeric()
        ->toHaveLength(7);
});

it('can returns a random birthdate 18 years ago', function () use ($faker)
{
    $date = $faker->teacher()->birthdate();

    $year = intval(explode('/', $date)[2]);

    $minimalYear = intval(date('Y')) - 18;

    expect($date)
        ->toMatch('/^[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}$/')
        ->toBeString()
        ->and($year)
            ->toBeLessThanOrEqual($minimalYear)
            ->toBeInt();
});