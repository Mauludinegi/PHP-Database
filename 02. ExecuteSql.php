<?php
require_once __DIR__ . ("/01. koneksi.php");

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ("02", "Purnama", "Purnama@gmail.com");
SQL;
$connection->exec($sql);
$connection = null;