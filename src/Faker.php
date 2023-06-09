<?php

namespace AkemiAdam\IfrnFaker;

use AkemiAdam\IfrnFaker\Core\{
    Student, Campus, Course, Teacher
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
        return new Student($this->creator, new Course($this->creator));
    }

    /**
     * Returns a teacher object
     * 
     * @return Teacher
     */
    public function teacher() : Teacher
    {
        return new Teacher($this->creator);
    }

    /**
     * Returns a campus object
     */
    public function campus() : Campus
    {
        return new Campus($this->creator);
    }

    /**
     * Returns a course object
     */
    public function course() : Course
    {
        return new Course($this->creator);
    }
}