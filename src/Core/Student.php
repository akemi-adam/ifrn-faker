<?php

namespace AkemiAdam\IfrnFaker\Core;

use AkemiAdam\IfrnFaker\Core\{
    Person, Course
};

use Faker\Generator;

class Student extends Person 
{
    private Course $course;

    public function __construct(Generator $creator, Course $course)
    {
        parent::__construct($creator);

        $this->course = $course;
    }

    /**
     * Returns a random student enrollment
     * 
     * @return string
     */
    public function enrolment() : string
    {
        $enrolmentYear = date('Y', rand(strtotime("Jan 01 2008"), strtotime('now')));

        $orderNumber = random_int(1, 80);

        $order = $orderNumber > 10 ? $orderNumber : "0$orderNumber";

        return sprintf('%s%d%s00%s', $enrolmentYear, $this->period(2), $this->course->code(), $order);
    }

    /**
     * Returns a random period
     * 
     * @param int $max = 4
     * 
     * @return int
     */
    public function period(int $max = 4) : int
    {
        return random_int(1, $max);
    }

    /**
     * Returns a random birthdate
     * 
     * @return string
     */
    public function birthdate() : string
    {
        return sprintf('%s/%s/%s', $this->creator->dayOfMonth(), $this->creator->month(), $this->creator->year('-16 years'));
    }

    /**
     * Returns a random I.R.A.
     * 
     * @return float
     */
    public function ira() : float
    {
        return $this->creator->randomFloat(2, 0, 100);
    }

    /**
     * Returns a random status for fingerprint
     * 
     * @return string
     */
    public function fingerprint() : string
    {
        return $this->creator->randomElement(['Sim', 'Não']);
    }

    /**
     * Returns a random status for diploma issue
     * 
     * @return string
     */
    public function issuedDiploma() : string
    {
        return $this->creator->randomElement(['Sim', 'Não']);
    }

    /**
     * Returns a random shift
     * 
     * @return string
     */
    public function shift() : string
    {
        return $this->creator->randomElement(['Matutino', 'Vespertino', 'Noturno']);
    }
}