<?php
require_once("koneksi.php");
$host = "localhost";
    $port = 3306;
    $database = "php_database";
    $username = "root";
    $password = "";
    try {
        $connection = new PDO(
            "mysql:host=$host:$port;dbname=$database",
            $username,
            $password
        );
        echo "Sukses terkoneksi ke database" . PHP_EOL;
        $connection = null;
    } catch (PDOException $exception) {
        echo "ERror terkoneksi ke database : " . $exception->getMessage() . PHP_EOL;
    }
