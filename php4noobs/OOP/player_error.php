<?php

use Player as GlobalPlayer;

class Player
{

    public string $username; 
    private string $password;  
    protected float $money;

    /**
    * Método mâgico: construtor    
    */

    public function __construct(string $username = 'danielhe4rt', string $password, float $money = 1500.0)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_ARGON2I); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }
}

// Instancia sem o valor do atributo username
$danielhe4rt = new GlobalPlayer('secret123', 99999);