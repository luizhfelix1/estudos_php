<?php

class Player
{

    public string $username;
    private string $password;
    protected float $money;

    /**
    * Método mágivo: construtor
    */

    public function __construct(string $password, string $username = 'danielhe4rt', float $money = 1500.0)
    {
        $this->username = $username; // Setter do Construtor
        $this->password = password_hash($password, PASSWORD_ARGON2I); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }

}

// Instancia sem o valor do atributo username e o money
$danielhe4rt = new Player('secret123');

$danielhe4rt->username; // danielhe4rt
$danielhe4rt->money; //1500.0