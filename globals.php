<?php
    header('Content-Type: text/html; charset=UTF-8');
    
    setcookie("lang","fr",time()+60*60*24*7);

    if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en', 'ja'])) {
        $_COOKIE['lang'] = $_GET['lang'];
    }

    $lang = $_COOKIE['lang'];
    $trad = require __DIR__ . "/traduction/{$lang}.php";
?>
