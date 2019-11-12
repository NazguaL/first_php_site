<?php
    $username = trim(filter_var($_GET['username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_GET['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_GET['login'], FILTER_SANITIZE_STRING));
    $password1 = trim(filter_var($_GET['password1'], FILTER_SANITIZE_STRING));
    $password2 = trim(filter_var($_GET['password2'], FILTER_SANITIZE_STRING));


/*    if ($password1 != $password1)
        exit();
    else if (strlen($username) <= 3)
        exit();
    else if (strlen($email) <= 3)
        exit();
    else if (strlen($login) <= 3)
        exit();
    else if (strlen($password1) <= 3)
        exit();*/

/*    $salt = 'asfrdfhggj';
    $password_hash = md5($password1 . $salt);*/

    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'test';
    $db_host = '127.0.0.1';

    $dsn = 'mysql:host='.$db_host.';dbname='.$db_name;
    $pdo = new PDO($dsn, $db_user, $db_password);

    $sql = "INSERT INTO users(name, email, login, password) VALUES(?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$username, $email, $login, $password1]);

?>