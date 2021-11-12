<?php

class Pai {

    protected $nomePai = 'João';

    private $cpf = '999.999.999.99';

    public function apresentar()
    {
        echo "Meu nome é {$this->nomePai} e meu CPF é: {$this->cpf}";
    }

    private function mostrarCpf()
    {
        echo $this->cpf;
    }
}

class Filho extends Pai {

    public $nome = 'Pedro';

    public function mostrarCpfPai()
    {
        echo "O CPF do meu Pai é: " . $this->cpf; //Propriedade inexistente
    }
}

$pai = new Pai();
$pai->cpf . PHP_EOL; //Erro fatal
$pai->mostrarCpf() . PHP_EOL; //Erro fatal
$pai->apresentar() . PHP_EOL //Ok

$filho = new Filho();
$filho->mostrarCpfPai(); //Erro fatal