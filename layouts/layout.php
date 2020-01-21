<?php

/**
 * @var string $view
 */

?>
<html lang="ru">
<head>
    <title>Shop</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/resources/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php include "header.php"; ?>

        <div class="content">
            <?php include $viewFile; ?>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>