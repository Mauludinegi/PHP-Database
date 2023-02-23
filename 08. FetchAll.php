<?php
require_once __DIR__.("/01. koneksi.php");

$connection = getConnection();
$sql = "select * from admin";
$preparedStatement = $connection->query($sql);
var_dump($preparedStatement->fetchAll());

$connection = null;