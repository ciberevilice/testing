<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 26.10.2018
 * Time: 21:33
 */

function conn() {
    $dsn = "mysql:host=localhost;dbname=bibl";
    $user = "root";
    $password = "root";
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    try {
        $db = new PDO ($dsn, $user, $password, $option);
    } catch (PDOException $e) {
        echo "Подключение не удалось: " . $e -> getMessage();
    }
    return $db;
}