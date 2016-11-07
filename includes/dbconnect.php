<?php

try {
    $pdo = new PDO("mysql:dbname=furniture; host=localhost", "root", "");
}catch(PDOException $e){
    echo "Возникла ошибка соединения с базой данных: ".$e->getMessage();
    exit;
}