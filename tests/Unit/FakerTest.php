<?php

use AkemiAdam\IfrnFaker\Faker;
use AkemiAdam\IfrnFaker\Core\{
    Student, Teacher, Campus, Course
};

use Faker\Generator;

uses()->group('faker');

$faker = new Faker;

test('faker is a object', function () use ($faker)
{
    expect($faker)
        ->toBeObject();
});

test('faker has the methods: student(), teacher(), course(), campus()', function () use ($faker)
{
    expect($faker)
        ->toHaveMethods(['student', 'teacher', 'course', 'campus']);
});

test('faker has the creator property', function () use ($faker)
{
    expect($faker)->toHaveProperty('creator');
});

it('can returns a student object', function () use ($faker)
{
    expect($faker->student())
        ->toBeObject()
        ->toBeInstanceOf(Student::class);
});

it('can returns a teacher object', function () use ($faker)
{
    expect($faker->teacher())
        ->toBeObject()
        ->toBeInstanceOf(Teacher::class);
});

it('can returns a campus object', function () use ($faker)
{
    expect($faker->campus())
        ->toBeObject()
        ->toBeInstanceOf(Campus::class);
});

it('can returns a course object', function () use ($faker)
{
    expect($faker->course())
        ->toBeObject()
        ->toBeInstanceOf(Course::class);
});