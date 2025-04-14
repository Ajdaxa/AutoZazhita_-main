<?php
try {
    $database = new PDO("mysql:host=localhost;dbname=autozazhita;charser=utf8", "root");
} catch (PDOException $error) {
    die("Ошибка подключения " . $error);
}
