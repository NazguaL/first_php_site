<!doctype html>
<html lang="en">
<head>
    <?php
    $page_title = 'vIT News (PHP edition)';
    include 'blocks/head.php'
    ?>
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

