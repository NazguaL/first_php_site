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
            <form action="reg_helper.php" method="post">

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
                <div class="alert-danger alert-primary mt-3 errorBlock" id="errorBlock"></div>
                <button type="button" class="btn btn-success mt-5" id="reg_user">Зарегистрироваться</button>
            </form>
        </div>
        <?php include 'blocks/side.php' ?>
    </div>
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $('#reg_user').click(function () {
        var username = $('#username').val();
        var email = $('#email').val();
        var login = $('#login').val();
        var password1 = $('#password1').val();
        var password2 = $('#password2').val();

        $.ajax({
            url: 'reg_helper.php',
            type: 'POST',
            cache: false,
            data: {'username': username, 'email': email, 'login': login, 'password1': password1,
                   'password2': password2},
            dataType: 'html',
            success: function (data) {
                if (data == 'Success') {
                    $('#reg_user').text('Вы зарегистрированы!!!');
                    $('#errorBlock').hide();
                }
                else {
                    $('#errorBlock').show();
                    $('#errorBlock').text(data);
                }
            }

        });
    });
</script>


</html>

