<?php

namespace AkemiAdam\IfrnFaker\Core;

use Faker\Generator;

class Campus
{
    protected Generator $creator;

    private array $campuses = [
        'Apodi', 'Caicó', 'Canguaretama', 'Ceará-Mirim',
        'Currais Novos', 'Ipanguaçu', 'João Câmara', 'Jucurutu',
        'Lajes', 'Macau', 'Mossoró', 'Natal-Central',
        'Natal-Cidade Alta', 'Natal-Zona Leste', 'Natal-Zona Norte', 'Nova Cruz',
        'Parelhas', 'Parnamirim', 'Pau dos Ferros', 'Santa Cruz',
        'São Gonçalo do Amarante', 'São Paulo do Potengi'
    ];

    public function __construct(Generator $creator)
    {
        $this->creator = $creator;
    }

    public function name() : string
    {
        return $this->creator->randomElement($this->campuses);
    }
}