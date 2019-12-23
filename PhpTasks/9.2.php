<?php

if ($_COOKIE['num_views'] >= 20) {
    unset($_COOKIE['num_views']);
}

$num_views = 1;
if (isset($_COOKIE['num_views'])) {
    $num_views = $_COOKIE['num_views'] + 1;
}

setcookie('num_views', $num_views, time()+60*60*24*30, '/');
?>
Number of views: <?=$num_views?><br>

<?if (in_array($num_views/5, [1,2,3])):?>
    Специальное сообщение &#128512;
<?endif?>
