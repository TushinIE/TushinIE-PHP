<?php
# задание 1.1

echo("How are you?");
echo("I' m fine.");

# задание 1.2

$gumburger = 49.5;
$milkshake = 19.5;
$soda = 8.5;
$tax = 7.5;
$tip = 16;

$price = $gumburger * 2 + $milkshake + $soda;
$nds = $price * ($tax / 100);
$tip = $price * ($tip / 100);
$total = $price + $tip + $nds;

echo "Общий счет = {$price};";
echo " НДС = {$nds};";
echo " Чаевые = {$tip};";
echo " Итого = {$total}";

# задание 1.3

$gumburger = 49.5;
$milkshake = 19.5;
$soda = 8.5;
$tax = 7.5;
$tip = 16;

$price = $gumburger * 2 + $milkshake + $soda;
$nds = $price * ($tax / 100);
$tip = $price * ($tip / 100);
$total = $price + $tip + $nds;
$expense_nds = $price + $nds;
$expense_tip = $price + $tip;
$gumburger *= 2;


echo "Гамбургер х 2 шт. = {$gumburger};\n";
echo "Молочно-шоколадный коктейль х 1 шт. = {$milkshake};\n";
echo "Кока-кола х 1 шт. = {$soda};\n";
echo "Общий счет без НДС = {$price};\n";
echo "Общий счет с НДС = {$expense_nds};\n";
echo "Общий счет с чаевыми = {$expense_tip};\n";
echo "Общий счет и с чаевыми и с НДС = {$total}";

# задание 1.4

$first_name = "Ilya";
$last_name = "Tushin";

$full_name = $first_name . " " . $last_name;

echo strlen($full_name);
echo $full_name;
# задание 1.5

$a = 2;
echo " а = {$a} \n";
++$a;
echo "++a = {$a} \n";
$a *= 5;
echo "a *= 5 = {$a} \n";
$a **= 2;
echo "a **= 2 = {$a} \n";
