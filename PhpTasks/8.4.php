<?php

$errors = [];
$path = null;

if (!empty($_POST)) {
    if (empty($_POST['path'])) {
        $errors[] = 'Не заполнен путь';
    } else {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/' . $_POST['path'];

        if (!file_exists($path)) {
            $errors[] = 'Файл не существует';
        }

        if (!is_readable($path)) {
            $errors[] = 'Файл не доступен для чтения';
        }
    }
}
?>
<style>
    .error {
        color: red;
    }
</style>
<form method="POST">
    Путь к файлу:<br>
    <input type="text" name="path"><br>
    <button>Показать</button>
</form>

<?if (!empty($errors)):?>
    <?foreach ($errors as $error):?>
        <div class="error"><?=$error?></div>
    <?endforeach;?>
<?else:?>
    <h1>Содержимое файла</h1>
    <code class="content">
        <?$handle = fopen($path, 'r');?>
        <?while($buffer = fgets($handle)):?>
            <?=htmlspecialchars($buffer)?><br>
        <?endwhile?>
        <?fclose($handle);?>
    </code>
<?endif?>
