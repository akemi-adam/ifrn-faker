# IFRN Faker

Pacote para gerar dados fictícios para testes no contexto de aplicações para o IFRN

## Instalação

```shell
composer require akemi-adam/ifrn-faker
```

## Testes

Os testes foram construídos em Pest 2, para executá-los, basta usar o comando:

```
.\vendor\bin\pest
```

## Como usar

Para começar a utilizar o pacote, basta chamar uma instância do objeto Faker:

```php
<?php

$faker = new AkemiAdam\IfrnFaker\Faker;
```

A patir desse objeto, é possível chamar os outros objetos que de fato contém os dados fictícios:

```php
<?php

// Instânciando os objetos

$student = $faker->student();

$campus = $faker->campus();

$course = $faker->course();

// Mostrando os dados fakes

echo 'Matrícula ' . $student->enrolment();

echo 'Campus ' . $campus->name();

echo 'Curso' . $course->name();
```

A saída do código acima seria, respectivamente, algo como:

```shell
Matrícula 20181101110005
Campus Caicó
Curso Informática para Internet
```

## Funções

Segue a lista com todas as funções que o pacote fornece

```php
<?php

$faker = new AkemiAdam\IfrnFaker\Faker;

// Campus

$faker->campus()->name(); // Exemplo: Caicó, Apodi, Natal-Cidade Alta, ...


// Curso

$faker->course()->code(); // Exemplo: 10223, 44312, 10111, ...

$faker->course()->name(); // Exemplo: Informática para Internet, Segurança do Trabalho, Equipamentos Biomédicos, ...


// Estudante

$faker->student()->enrolment(); // Exemplo: 20221101110070, 20161101120070, 20202114310004

$faker->student()->period(); // Exemplo: 1, 2, 3, 4

$faker->student()->period($max); // Exemplo: 1, ..., $max

$faker->student()->birthdate(); // Exemplo: 18/02/2007, 30/11/2002, 11/06/2004, ...

$faker->student()->ira(); // Exemplo: 55.43, 100, 97.70, ...

$faker->student()->fingerprint(); // Exemplo: Sim, Não

$faker->student()->issuedDiploma(); // Exemplo: Sim, Não

$faker->student()->shift(); // Exemplo: Matutino, Vespertino, Noturno
```

Student herda da classe Person e portanto possui seus métodos:

```php
<?php

$faker->student()->name() // Retorna um nome brasileiro aleatório (Um alias para a função name() do PHP-Faker)

$faker->student()->name($gender) // Retorna um nome comum normalmente associado ao gênero passado por parâmetro

$faker->student()->gender() // Exemplo: Feminino, Masculino, Não-binário

$faker->student()->schoolEmail() // Exemplo: renata.dutra@escolar.ifrn.edu.br, ariel.f@escolar.ifrn.edu.br, ...

$faker->student()->academicEmail() // Exemplo: renata.almeida@academico.ifrn.edu.br, marta.r@academico.ifrn.edu.br, ...

$faker->student()->bloodType() // Exemplo: +O, -AB, +A, ...

$faker->student()->telephone() // Retorna um telefone brasileiro
```