<?php

$data = json_encode([
    'public' => true,
    'description' => "Task 10/4",
    'files' => [
        basename (__FILE__) => ['content' => file_get_contents(__FILE__)],
    ],
]);

$ch = curl_init('https://api.github.com/gists');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36');
$response = curl_exec($ch);

echo "<pre>";
print_r($response);
echo "</pre>";