<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($login) <= 3)
    $error = 'Короткий или пустой логин!';
else if (strlen($password) <= 3)
    $error = 'Короткий или пустой пароль!';

if ($error != '') {
    echo $error;
    exit();
}

$password_hash = md5($password);

require_once 'connect_to_mysql.php';

$sql = "SELECT 'id' FROM users WHERE login='$login' && password='$password_hash'";
$query = $pdo->prepare($sql);
$query->execute([$login, $password_hash]);

$user = $query-> fetch(PDO::FETCH_OBJ);

if (strval($user->id) == '0')
    echo 'Нет такого пользователя'.$user->id;
else {
    $error = 'Success';
    echo $error;
    setcookie('login', $login, time() + 3600 * 24 *30, '/');
    }

?>