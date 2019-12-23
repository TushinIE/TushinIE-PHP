<?php
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