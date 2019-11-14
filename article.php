<?php
if (isset($_COOKIE['login']) == '') {
    header('Location: reg.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    $page_title = 'Добавление новости на vIT News (PHP edition)';
    include 'blocks/head.php'
    ?>
</head>
<?php include 'blocks/header.php' ?>
<body>
<main class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
            <h4>Добавление новости</h4>
            <form action="">

                <label for="title">Заголовок:</label>
                <input type="text" name="title" id="title" class="form-control">
                <label for="intro">Интро:</label>
                <textarea name="intro" id="intro" class="form-control"></textarea>
                <label for="text">Текст:</label>
                <textarea name="text" id="text" class="form-control" rows="8"></textarea>


                <div class="alert-danger alert-primary mt-3 errorBlock" id="errorBlock"></div>
                <button type="button" class="btn btn-success mt-5" id="public">Опубликовать</button>
            </form>
        </div>
        <?php include 'blocks/side.php' ?>
    </div>
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $('#public').click(function () {
        var title = $('#title').val();
        var intro = $('#intro').val();
        var text = $('#text').val();

        $.ajax({
            url: 'add_article.php',
            type: 'POST',
            cache: false,
            data: {'title': title, 'intro': intro, 'text': text},
            dataType: 'html',
            success: function (data) {
                if (data == 'Success') {
                    $('#title').text('');
                    $('#intro').text('');
                    $('#text').text('');
                    $('#public').text('Опубликовано!');
                    document.location.reload(true);
                    $('#errorBlock').hide();
                    alert('Статья опубликована!');

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

