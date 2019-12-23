<?php

require_once '4_Ingredient.php';

use Block5\Task4\Ingredient;

class Entree
{
    public $name;
    public $ingredients = [];

    public function hasingredient($ingredient) {
        return  in_array($ingredient,  $this->ingredients);
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;

        foreach($this->ingredients as $ingredient) {
            $totalPrice += $ingredient->getPrice();
        }

        return $totalPrice;
    }
}

class Pizza extends Entree
{
    public function __construct($name, $ingredients = [])
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }
}

$ingredients = [
    new Ingredient('Тесто', 50),
    new Ingredient('Сыр', 230),
    new Ingredient('Помидоры', 70),
];
$margarita = new Pizza('Маргарита', $ingredients);
$totalPrice = $margarita->getTotalPrice();
echo "Общая стоимость $totalPrice руб.";



