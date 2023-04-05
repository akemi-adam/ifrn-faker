<?php

namespace AkemiAdam\IfrnFaker\Core;

use Faker\Generator;
use Symfony\Component\DomCrawler\Crawler;

class Course
{
    private Generator $creator;

    private array $courseType = [
        'integrated' => 'Técnico integrado em',
        'subsequent' => 'Técnico subsequente em'
    ];

    private array $integratedCourses = [
        'Agroecologia', 'Administração', 'Agricultura', 'Agropecuária', 'Alimentos',
        'Apicultura', 'Biocombustíveis', 'Comércio', 'Controle Ambiental', 'Cooperativismo',
        'Edificações', 'Eletrônica', 'Eletrotécnica', 'Eletromecânica', 'Equipamentos Biomédicos',
        'Eventos', 'Geologia', 'Informática', 'Informática para internet', 'Jogos Digitais',
        'Lazer', 'Logística', 'Manutenção e Suporte em Informática', 'Mecânica', 'Mecatrônica',
        'Meio Ambiente', 'Mineração', 'Multimídia', 'Química', 'Recursos Pesqueiros',
        'Refrigeração e Climatização', 'Vestuário', 'Zootecnica', 'Têxtil'
    ];
    
    private array $subsequentCourses = [
        'Administração', 'Agropecuária', 'Alimentos', 'Apicultura', 'Biocombustíveis',
        'Cooperativismo', 'Comércio', 'Controle Ambiental', 'Edificações', 'Equipamentos Biomédicos',
        'Eletrônica', 'Eletrotécnica', 'Estradas', 'Eventos', 'Geologia',
        'Guia de Turismo', 'Informática', 'Instrumento Musical', 'Informática para Internet', 'Logística',
        'Manutenção e Suporte em Informática', 'Mecânica', 'Mecatrônica', 'Meio Ambiente', 'Mineração',
        'Petróleo e Gás', 'Química', 'Redes de Computadores', 'Refrigeração e Climatização', 'Recursos Pesqueiros',
        'Saneamento', 'Secretaria Escolar', 'Segurança do Trabalho', 'Vestuário', 'Zootecnia'
    ];

    public function __construct(Generator $creator)
    {
        $this->creator = $creator;
    }

    public function code() : string
    {
        return $this->creator->randomNumber(5, true);
    }

    public function name(bool $isIntegrated = true) : string
    {
        if (!$isIntegrated)
            return sprintf('%s %s', $this->courseType['subsequent'], $this->creator->randomElement($this->subsequentCourses));
        
        return sprintf('%s %s', $this->courseType['integrated'], $this->creator->randomElement($this->integratedCourses));
    }
}