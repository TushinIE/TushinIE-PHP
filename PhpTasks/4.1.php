<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task №4.1</title>
</head>
<?php
function image($x , $alt, $height, $width){
    $a = "<div class='img'><img src='img/{$x}.jpg' alt='{$alt}' height='{$height}px' width='{$width}px'></div>";
    echo $a;
}
?>
<body>
    <?php
        image(1, 'Изображение №1', 720, 1280);
        image(2, 'Изображение №2', 720, 1280);
    ?>
</body>
</html>