<?php

Class Ingredient {
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    function getInfo() {
        return "{$this->name}"." Стоимость: "."{$this->price}  ";
    }
    function sale($a) {
        $this->price = $a;
        return "(Цена со скидкой "."= {$a})<br>";
    }
}

$beet = new Ingredient('Свекла', 15);
echo $beet->getInfo();
echo $beet->sale(13);
$potatoes = new Ingredient('Картошка', 40);
echo $potatoes->getInfo();
echo $potatoes->sale(35);
$bow = new Ingredient('Лук', 12);
echo $bow->getInfo();
echo $bow->sale(10);
$meat = new Ingredient('Мясо', 77);
echo $meat->getInfo();
echo $meat->sale(73);
