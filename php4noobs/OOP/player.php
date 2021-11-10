<?php
// Player.php

class Player {

    public string $username; // propriedade/atributo
    private string $password; // propriedade/atributo
    protected float $money; // propriedade/atributo 

    /**
    * Método máfico: contrutor
    */

    public function __construct(string $username, string $password, float $money)
    {
        $this->username = $username; // Setter do Construtor
        $this->password = password_hash($password, PASSWORD_ARGON2ID); // Setter do Construtor
        $this->money = $money; // Setter do Construtor
    }

    /**
    * Metodo: canbuy - Checa se o jogador tem dinheiro suficiente parta comprar um item
    * @param oldPassword string
    * @param newPassword string
    * @return void
    */

    public function updatePassword(string $oldPassword, string $newPassword): void
    {
        if (!pasword_verify($oldPassword, $this->password)) {
            throw new Exception('A senha anterior está incorreta.');
        }

        $this->password = password_hash($newPassword, PASSWORD_ARGON2ID);
    }

    /**
    * Método: getMoney (Getter) - retorna a quantidade de dinheiro do jogador
    * @return float
    */

    public function getMoney(): float
    {
        return $this->money;
    }

}

$danielhe4rt = new Player('danielhe4rt', 'secret123', 1000);

//Instancia sem o valor do atributo money
$danielhe4rt = new Player('danielhe4rt', 'secret123');
