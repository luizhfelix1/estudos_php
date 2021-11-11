<?php

class Pai
{

    public $nome = 'João';

    public $idioma = 'Português';

    public $pais = 'Brasil';

    public function apresentar()
    {
            echo "Olá, meu nome é {$this->nome} e meu idioma nativo é {$this->idioma} e eu moro no {$this->pais}!" . PHP_EOL;
    }
}

class Filho extends Pai {
    public $nome = 'Enzo';
}

$pai = new Pai();
$pai->apresentar();


$filho = new Filho();
$filho->apresentar();