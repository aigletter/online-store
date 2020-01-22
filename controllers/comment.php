<?php
    $name = $_POST["name"];
    $product_id = $_POST["product_id"];
    $comment = $_POST["comment"];
    $name = htmlspecialchars($name);
    $comment = htmlspecialchars($comment);
    $mysqli = new mysqli("localhost", "root", "Kipper88", "shop");
    $mysqli->query("INSERT INTO comments (name, product_id, comment) VALUES 
('$name', '$product_id', '$comment')");
    header("location: ".$_SERVER["HTTP_REFERER"]);
?>