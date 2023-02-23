<?php
require_once __DIR__ . ("/01. koneksi.php");

$connection = getConnection();

$username = "petugas";
$password = "petugas";

$sql = "select * from admin where username = ? and password = ? ";
$preparedStatement = $connection->prepare($sql);
$preparedStatement->execute([$username, $password]);

if ($result = $preparedStatement->fetch()) {
    echo "Sukses login : " . $result["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}