<!doctype html>
<html lang="en">
<head>
    <?php
    $page_title = 'Регистрация vIT News (PHP edition)';
    include 'blocks/head.php'
    ?>
</head>
<?php include 'blocks/header.php' ?>
<body>
<main class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
            <h4>Регистрация</h4>
            <form action="reg/reg_helper.php" method="get">

                <label for="username">Ваше Имя:</label>
                <input type="text" name="username" id="username" class="form-control">
                <label for="email">Ваш e-mail:</label>
                <input type="text" name="email" id="email" class="form-control">
                <label for="login">Ваш Login:</label>
                <input type="text" name="login" id="login" class="form-control">
                <label for="password1">Ваш пароль:</label>
                <input type="password" name="password1" id="password1" class="form-control">
                <label for="password2">Повторите ваш пароль:</label>
                <input type="password" name="password2" id="password2" class="form-control">

                <button type="submit" class="btn btn-success mt-5">Зарегистрироваться</button>
            </form>
        </div>
        <?php include 'blocks/side.php' ?>
    </div>
</main>
</body>
<?php include 'blocks/footer.php' ?>
</html>

