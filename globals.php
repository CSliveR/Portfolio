<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}

if (isset($_GET['lang']) && in_array($_GET['lang'], ['fr', 'en', 'ja'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'];
$trad = require(__DIR__ . "/traduction/{$lang}.php");
?>
