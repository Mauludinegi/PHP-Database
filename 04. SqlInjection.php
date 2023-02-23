<?php
require_once __DIR__ . ("/01. koneksi.php");

$connection = getConnection();
// $username = "admin';#"; //sqlInjection

//solusi sqlInjection bisa diakali salah satunya menggunakan quote();
$username = $connection->quote("admin");
$password = $connection->quote("admin");
$success = false;
$find_user = null;

$sql = "select * from admin where username=$username and password=$password"; //Sql Parameter
echo $sql . PHP_EOL;
$statement = $connection->query($sql);

foreach ($statement as $row) {

    $find_user = $row["username"];
    $success = true;
}

if ($success) {
    echo "Login username: $find_user sukses" . PHP_EOL;
} else {
    echo "Login gagal $username" . PHP_EOL;
}

$connection = null;