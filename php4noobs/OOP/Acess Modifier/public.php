<?php

class Pessoa {
    public $nome = 'João';
    
    public function apresentar()
    {
        echo "Meu nome é {$this->nome}";
    }
}

$pessoa = new Pessoa();
echo $pessoa->nome . PHP_EOL; //Output: João
$pessoa->apresentar() . PHP_EOL; //Output: Meu nome é João