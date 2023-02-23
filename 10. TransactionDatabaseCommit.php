<?php
require_once __DIR__.("/01. koneksi.php");

$connection = getConnection();
$connection->beginTransaction();
$connection->exec("insert into comments(email, comment) values('gie@gmail.com', 'gajah')");
$connection->exec("insert into comments(email, comment) values('giw@gmail.com', 'harimau')");
$connection->exec("insert into comments(email, comment) values('gie@gmail.com', 'gajah')");
$connection->exec("insert into comments(email, comment) values('giw@gmail.com', 'harimau')");
$connection->exec("insert into comments(email, comment) values('gie@gmail.com', 'gajah')");
$connection->exec("insert into comments(emails, comment) values('giw@gmail.com', 'harimau')");

$connection->commit();
$connection = null;