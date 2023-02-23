<?php
require_once __DIR__ . ("/01. koneksi.php");

$connection = getConnection();
$connection->exec("insert into comments(email, comment) values ('gie@gmail.com', 'gajah')");
$id = $connection->lastInsertId();
echo $id . PHP_EOL;
$connection = null;