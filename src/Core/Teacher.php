<?php

namespace AkemiAdam\IfrnFaker\Core;

use AkemiAdam\IfrnFaker\Core\Person;

use Faker\Generator;

class Teacher extends Person 
{
    public function __construct(Generator $creator)
    {
        parent::__construct($creator);
    }

    /**
     * Returns a random teacher enrolment
     * 
     * @return string
     */
    public function enrolment() : string
    {
        return sprintf('%d%d', random_int(1, 9), $this->creator->randomNumber(6, true));
    }

    /**
     * Returns a random birthdate
     * 
     * @return string
     */
    public function birthdate() : string
    {
        return sprintf('%s/%s/%s', $this->creator->dayOfMonth(), $this->creator->month(), $this->creator->year('-18 years'));
    }
}