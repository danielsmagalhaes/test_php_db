<?php

$username = 'suporte';
$password = 'kw88dby6';

$dsn = 'mysql:dbname=daniel;host=192.168.243.81;port=3306;charset=utf8';
$connection = new \PDO($dsn, $username, $password);

// throw exceptions, when SQL error is caused
$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
// prevent emulation of prepared statements
$connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

echo "entrou!"
?>