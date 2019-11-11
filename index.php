<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.min.js"></script>
    <title>
        vIT News (PHP edition)
    </title>
</head>
<?php include 'blocks/header.php' ?>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-8 mb-5">
                {% block body %}
                {% endblock %}
            </div>
            <?php include 'blocks/side.php' ?>
        </div>
    </main>
</body>
<?php include 'blocks/footer.php' ?>
</html>

