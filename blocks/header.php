<header class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar" style="color:white"><b>vIT News</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{% url 'contacts' %}">Контакты</a>
            </li>
            <?php
            if (isset($_COOKIE['login']) != ''):
            ?>
            <li class="nav-item">
                <a class="nav-link" href="article.php">Создать новость</a>
            </li>
            <?php
                endif
            ?>
        </ul>
    </div>
    <div class="navbar-nav">
        <?php
        if (isset($_COOKIE['login']) == ''):
        ?>
        <a href="reg.php" class="btn btn-outline-secondary mr-2">Регистрация</a>
        <a href="auth.php" class="btn btn-outline-secondary">Авторизация</a>
        <?php
            else:
        ?>
            <a href="auth.php" class="btn btn-outline-secondary">Страница пользователя <?=$_COOKIE['login']?></a>
            <button class="btn btn-danger ml-3" id="exit_btn">Выйти</button>
        <?php
            endif
        ?>
    </div>
<script>
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
</header>