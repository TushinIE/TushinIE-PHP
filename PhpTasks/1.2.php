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

echo "Общий счет = {$price};";
echo " НДС = {$nds};";
echo " Чаевые = {$tip};";
echo " Итого = {$total}";
