<?php

class Item {

    private string $name; // propriedade/atributo 
    private float $price; // propriedade/atributo 

    /**
    * Método mágico: construtor
    */

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;    
    }

    /**
    * Mêtodo: getName (Getter) - retorna o nome do item
    * @return string
    */

    public function getName(): string
    {
        return $this->name;
    }

    /**
    * Método: getPrice (Getter) - retorna o preço do item
    * @return float
    */

    public function getPrice(): string
    {
        return $this->price;
    }
}


