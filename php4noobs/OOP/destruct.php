<?php

class Player
{

    public string $username; // propriedade/atributo 

    /**
    * Método mágivo: construtor
    */
    public function __construct(string $username)
    {
        $this->username = $username; // Setter do Construtor
        echo "Jogador Cadastrado!";
    }

    /**
    * Método mágico: destrutor
    */

    public function __destruct()
    {
        echo "Conta do jogador" . $this->username . " encerrada!";
    }
}

$danielhe4rt = new Player('danielhe4rt');
// Jogador Cadastrado!

unset($danielhe4rt);
// Conta do jogador danielhe4rt encerrada!

