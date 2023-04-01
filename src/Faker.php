<?php

namespace AkemiAdam\IfrnFaker;

use AkemiAdam\IfrnFaker\Core\Student;

use Faker\Generator;
use Faker\Factory;

final class Faker
{
    private Generator $creator;

    public function __construct()
    {
        $this->creator = Factory::create('pt_BR');
    }

    /**
     * Returns a student object
     * 
     * @return Student
     */
    public function student() : Student
    {
        return new Student($this->creator);
    }
}