<!doctype html>
<html lang="en">
<head>
    <?php
    $id = $_GET['id'];
    require_once 'connect_to_mysql.php';
    $sql = "SELECT * FROM articles WHERE id='$id'";

    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    $article = $query->fetch(PDO::FETCH_OBJ);

    $page_title = $article->title;
    include 'blocks/head.php'
    ?>
</head>
<?php include 'blocks/header.php' ?>
<body>
<main class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
            <div class="jumbotron">
                <h1><?=$article->title?></h1>
                <p><b>Автор: </b><?=$article->author?></p>
                <br>
                <p><?=$article->text?></p>
                <br>
                <p><b>Дата: </b><?=date('d M Y H:i:s', $article->date)?></p>
            </div>
        </div>
        <?php include 'blocks/side.php' ?>
    </div>
</main>
</body>
<?php include 'blocks/footer.php' ?>
</html>