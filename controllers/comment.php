<?php
    $name = $_POST["name"];
    $product_id = $_POST["product_id"];
    $comment = $_POST["comment"];
    $name = htmlspecialchars($name);
    $comment = htmlspecialchars($comment);
    /*$mysqli = new mysqli("localhost", "root", "1q2w3e", "shop");
    $mysqli->query("INSERT INTO comments (name, product_id, comment) VALUES 
('$name', '$product_id', '$comment')");*/
    $link = getDbConnection();
    $result = mysqli_query($link, "INSERT INTO comments (name, product_id, comment) VALUES 
('$name', '$product_id', '$comment')");
    if ($result) {
        header("location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        echo 'Error';
    }
?>