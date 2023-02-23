<?php
require_once __DIR__ . ("/01. koneksi.php");

$username = "petugas";
$password = "petugas";
$success = false;
$finc_user = null;

$connection = getConnection();

$sql = "select * from admin where username = ? and password = ?";

$preparedStatement = $connection->prepare($sql);

//binding parameter sql indexing
// $preparedStatement->bindParam(1, $username);
// $preparedStatement->bindParam(2, $password);
// $preparedStatement->execute();

//cara lain meng-execute preparedStatement;
$preparedStatement->execute([$username, $password]);

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