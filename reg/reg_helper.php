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

    $salt = 'asfrdfhggj';
    $password_hash = md5($password1 . $salt);

    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'test';
    $db_host = '127.0.0.1';

    $dsn = 'mysql:host='.$db_host.';dbname='.$db_name;
    $pdo = new PDO($dsn, $db_user, $db_password);

    $sql = "INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login, $password_hash]);

    $error = 'Success';
    echo $error;

?>