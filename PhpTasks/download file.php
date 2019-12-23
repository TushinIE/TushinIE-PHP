<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task №4.2</title>
</head>
<?php
function image($x){
    $img = 'img/';
    $a = "<div class='img'><img src='{$img}{$x}' alt='Изображение №1' height='720px' width='1280px'></div>";
    echo $a;
    $img = 'http://images.example.com/';
    $a = "<div class='img'><img src='{$img}' alt='Изображение №2' height='720px' width='1208px'></div>";
    echo $a;
}
?>
<body>
    <?php
        image('1.jpg');
        image('2.jpg');
    ?>
</body>
</html>