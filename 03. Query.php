<?php
require_once __DIR__ . ("/01. koneksi.php");
$connection = getConnection();
$sql = "select id, name, email from customers";
$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "Id: $id" . PHP_EOL;
    echo "Name: $name" . PHP_EOL;
    echo "Email: $email" . PHP_EOL;
}

$connection = null;