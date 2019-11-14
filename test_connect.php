<?php
require_once 'connect_to_mysql.php';

$sql = "INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute(['name', 'email', 'login', 'password']);

$login = 'login';
$password_hash = 'password';

$sql = "SELECT id FROM users WHERE login='$login' && password='$password_hash'";
$query = $pdo->prepare($sql);
$query->execute([$login, $password_hash]);

$user = $query->fetch(PDO::FETCH_OBJ);
echo strval($user->id);

?>