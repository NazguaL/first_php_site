<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $password1 = trim(filter_var($_POST['password1'], FILTER_SANITIZE_STRING));
    $password2 = trim(filter_var($_POST['password2'], FILTER_SANITIZE_STRING));

    $error = '';
    if (strlen($username) <= 3)
        $error = 'Короткое или пустое имя!';
    else if (strlen($email) <= 3)
        $error = 'Короткий или пустой email!';
    else if (strlen($login) <= 3)
        $error = 'Короткий или пустой логин!';
    else if (strlen($password1) <= 3)
        $error = 'Короткий или пустой пароль!';
    else if ($password1 != $password2)
        $error = 'Пароли не совпадают!';

    if ($error != '') {
        echo $error;
        exit();
    }

    $password_hash = md5($password1);

    require_once 'connect_to_mysql.php';

    $sql = "INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login, $password_hash]);

    $error = 'Success';
    echo $error;

?>