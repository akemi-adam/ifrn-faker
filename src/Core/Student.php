<?php

namespace AkemiAdam\IfrnFaker\Core;

use AkemiAdam\IfrnFaker\Core\Person;

class Student extends Person 
{
    public function enrolment() : string
    {
        return 'pass';
    }

    public function birthDate() : string
    {
        return sprintf('%s/%s/%s', $this->creator->dayOfMonth(), $this->creator->month(), $this->creator->year('-16 years'));
    }
}