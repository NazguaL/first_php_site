<?php
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
$text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));


$error = '';
if (strlen($title) <= 10)
    $error = 'Короткий или пустой заголовок!';
else if (strlen($intro) <= 20)
    $error = 'Короткое или пустое итнро!';
else if (strlen($text) <= 50)
    $error = 'Короткий или пустой текст!';


if ($error != '') {
    echo $error;
    exit();
}


require_once 'connect_to_mysql.php';

$sql = "INSERT INTO articles(title, intro, text, date, author) VALUES(?, ?, ?, ?, ?)";
$query = $pdo->prepare($sql);
$query->execute([$title, $intro, $text, time(), $_COOKIE['login']]);

$error = 'Success';
echo $error;

?>