<?php
    $name = $_POST["name"];
    $page_id = $_POST["page_id"];
    $text_comment = $_POST["text_comment"];
    $name = htmlspecialchars($name);
    $text_comment = htmlspecialchars($text_comment);
    $mysqli = new mysqli("localhost", "root", "Kipper88", "shop");
    $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`); 
    VALUES ('$name', '$page_id', '$text_comment')");
    header("Location: ".$_SERVER["HTTP_REFERER"]);
?>

<?php
    $page_id = 150;
    $mysqli = new mysqli("localhost", "root", "Kipper88", "shop");
    $result_set = $mysqli->query("SELECT * FROM  `comments` WHERE `page_id`='$page_id'");
    while ($row = $result_set->fetch_assoc()) {
        print_r($row);
        echo "<br />";
    }
?>