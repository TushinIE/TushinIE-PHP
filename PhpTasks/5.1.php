<?php

Class ingredient {
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    function getInfo() {
        return "{$this->name}"." Стоимость: "."{$this->price}<br>";
    }
}

$beet = new Ingredient('Свекла', 15);
echo $beet->getInfo();
$potatoes = new Ingredient('Картошка', 40);
echo $potatoes->getInfo();
$bow = new Ingredient('Лук', 12);
echo $bow->getInfo();
$meat = new Ingredient('Мясо', 77);
echo $meat->getInfo();
