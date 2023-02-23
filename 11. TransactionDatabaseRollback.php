<?php
require_once __DIR__.("/01. koneksi.php");

$connection = getConnection();
$connection->beginTransaction();
$connection->exec("insert into comments(email, comment) values ('jhon@gmail.com', 'bayawak huai')");
$connection->exec("insert into comments(email, comment) values ('jhon@gmail.com', 'huai')");
$connection->exec("insert into comments(email, comment) values ('jhon@gmail.com', 'huai')");
$connection->exec("insert into comments(email, comment) values ('jhon@gmail.com', 'huai')");
$connection->rollBack();
$connection = null;