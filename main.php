<?php
    require_once 'connect_to_mysql.php';
    $sql = 'SELECT * FROM articles ORDER BY date DESC';
    $query = $pdo->query($sql);

    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo "<h2>$row->title</h2>";
        echo "<p>$row->intro</p>";
        echo "<p><b>Автор: </b>$row->author</p>";
        echo "<a href='news.php?id=$row->id'>
                <button class='btn btn-success mb-5'>Узнать больше</button>
                </a>";
    }
?>