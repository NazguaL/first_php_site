<?php
$db_user = 'root';
$db_password = 'root';
$db_name = 'test';
$db_host = '127.0.0.1';

$dsn = 'mysql:host='.$db_host.';dbname='.$db_name;
$pdo = new PDO($dsn, $db_user, $db_password);


?>