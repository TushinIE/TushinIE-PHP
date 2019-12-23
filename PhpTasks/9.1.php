<?php

$num_views = 1;
if (isset($_COOKIE['num_views'])) {
    $num_views = $_COOKIE['num_views'] + 1;
}

setcookie('num_views', $num_views, time()+60*60*24*30, '/');
?>
Number of views: <?=$num_views?>