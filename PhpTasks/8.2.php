<?php

$path = __DIR__ . '/addresses.txt';
$savePath = __DIR__ . '/addresses-count.txt';

$addresses = [];

$handle = fopen($path, 'r');
while ($row = fgets($handle)) {
    if (isset($addresses[$row])) {
        $addresses[$row]++;
    } else {
        $addresses[$row] = 1;
    }
}
fclose($handle);

arsort($addresses);
$handle = fopen($savePath, 'w');
foreach ($addresses as $address => $count) {
    $str = $count . ',' . $address;
    fwrite($handle, $str);

    echo $str . '<br>';
}
fclose($handle);
