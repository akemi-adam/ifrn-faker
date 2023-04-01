<?php

namespace AkemiAdam\IfrnFaker\Core;

use Faker\Generator;

abstract class Person
{
    protected Generator $creator;

    public function __construct(Generator $creator)
    {
        $this->creator = $creator;
    }

    /**
     * Returns the person's enrolment
     * 
     * @return string
     */
    public abstract function enrolment() : string;

    /**
     * Returns the person's birth date
     * 
     * @return string
     */
    public abstract function birthDate() : string;

    /**
     * Returns the person's name
     * 
     * @return string
     */
    public function name(string $gender = null) : string
    {
        return $this->creator->name($gender);
    }

    /**
     * Returns the person's gender
     * 
     * @return string
     */
    public function gender() : string
    {
        return $this->creator->randomElement(['Feminino', 'Masculino', 'Não-binário']);
    }

    /**
     * Returns the person's safe email with ifrn domain
     * 
     * @return string
     */
    protected function email() : string
    {
        return str_replace(['.com', '.net', '.org'], '.ifrn.edu.br', $this->creator->safeEmail());
    }

    /**
     * Returns the person's school email
     * 
     * @return string
     */
    public function schoolEmail() : string
    {
        return str_replace('example', 'escolar', $this->email());
    }

    /**
     * Returns the person's academic email
     * 
     * @return string
     */
    public function academicEmail() : string
    {
        return str_replace('example', 'academico', $this->email());
    }

    /**
     * Returns the person's blood type with rh factor
     * 
     * @return string
     */
    public function bloodType() : string
    {
        return $this->creator->bloodGroup();
    }

    /**
     * Returns the person's telephone
     * 
     * @return string
     */
    public function telephone() : string
    {
        return $this->creator->cellphoneNumber();
    }
}