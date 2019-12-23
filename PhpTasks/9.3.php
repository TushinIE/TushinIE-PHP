<?php

session_start();

$file = __DIR__ . '/html-colors.json';
$data = file_get_contents($file);
$colors = json_decode($data, true);

if (!empty($_POST)) {
    $_SESSION['color'] = $_POST['color'];
}

$color = !empty($_SESSION['color']) ? $_SESSION['color'] : 'white';
?>
<!doctype html>
<html>
<body style="background: <?=$color?>;">
<form method="POST">
    Выберите цвет:
    <select name="color">
        <?foreach($colors as $colorName => $hex):?>
            <option value="<?=$hex?>"><?=$colorName?></option>
        <?endforeach?>
    </select>
    <button>Сохранить</button>
</form>
</body>
</html>

