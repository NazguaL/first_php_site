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
            <?php
                if (isset($_COOKIE['login']) == ''):
            ?>
            <h4>Авторизация</h4>
            <form action="">
                <label for="login">Ваш Login:</label>
                <input type="text" name="login" id="login" class="form-control">
                <label for="password">Ваш пароль:</label>
                <input type="password" name="password1" id="password" class="form-control">
                <div class="alert-danger alert-primary mt-3 errorBlock" id="errorBlock"></div>
                <button type="button" class="btn btn-success mt-5" id="auth_user">Войти</button>
            </form>
            <?php
                else:
            ?>
                    <h2><?=$_COOKIE['login']?></h2>
                    <button class="btn btn-danger" id="exit_btn">Выйти</button>
            <?php
                endif;
            ?>
        </div>
        <?php include 'blocks/side.php' ?>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $('#auth_user').click(function () {
        var login = $('#login').val();
        var password = $('#password').val();


        $.ajax({
            url: 'auth_helper.php',
            type: 'POST',
            cache: false,
            data: {'login': login, 'password': password},
            dataType: 'html',
            success: function (data) {
                if (data == 'Success') {
                    alert('Вы вошли на сайт');
                    $('#auth_user').text('Вы вошли на сайт');
                    $('#errorBlock').hide();
                    document.location.reload(true);
                }
                else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }

        });
    });
    $('#exit_btn').click(function () {

        $.ajax({
            url: 'exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
                alert('Вы вышли с сайта');
                document.location.reload(true);
            }
        });
    });
</script>
</body>
</html>