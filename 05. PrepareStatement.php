<?php
require_once __DIR__ . ("/01. koneksi.php");

$username = "admin';#";
$password = "admin";
$success = false;
$finc_user = null;

$connection = getConnection();

$sql = "select * from admin where username = :username and password = :password";

$preparedStatement = $connection->prepare($sql);

//binding parameter sql
$preparedStatement->bindParam("username", $username);
$preparedStatement->bindParam("password", $password);
$preparedStatement->execute();

foreach ($preparedStatement as $row) {
    $finc_user = $row["username"];
    $success = true;
}

if ($success) {
    echo "Selamat anda berhasil login $finc_user" . PHP_EOL;
} else {
    echo "Gagal login $username" . PHP_EOL;
}

$connection = null;