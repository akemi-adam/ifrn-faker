<?php

namespace AkemiAdam\IfrnFaker;

use AkemiAdam\IfrnFaker\Core\{
    Student, Campus
};
use Faker\{
    Generator, Factory
};

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

    /**
     * Returns a campus object
     */
    public function campus() : Campus
    {
        return new Campus($this->creator);
    }
}