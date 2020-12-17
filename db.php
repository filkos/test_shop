<?php

//указываем временную зону по-умолчанию
date_default_timezone_set('Europe/Moscow');
//подключаем базы данных
$opt = array(
    PDO::ATTR_ERRMODE                   => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
    PDO::ATTR_CURSOR                    => PDO::CURSOR_SCROLL
);

$pdo = new PDO ( 'mysql:host=localhost; port=3306; dbname=test; charset=utf8', 'root', '', $opt );