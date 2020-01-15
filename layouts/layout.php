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
</head>
<body>
    <div class="container">
        <?php include "header.php"; ?>

        <div class="content">
            <?php include $view; ?>
        </div>

        <?php include 'footer.php' ?>
    </div>
</body>
</html>