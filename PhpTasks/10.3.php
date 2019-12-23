<?php

$date = null;
if (!empty($_COOKIE['date'])) {
    $date = $_COOKIE['date'];
}

setcookie('date', time());
?>

<?if ($date):?>
    Вы посещали данную страницу <?=strftime('%d.%m.%Y %H:%M:%S', $date)?>
<?else:?>
    Вы еще не были на этой странице
<?endif?>
