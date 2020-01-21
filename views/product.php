<?php
$breadCrumbs = breadCrumbs([
    [
        'title' => 'Главная',
        'url' => '/'
    ],
    [
        'title' => 'Категория "' . $category['name'] . '"',
        'url' => '/category?id=' . $category['id']
    ]
])
?>

<?php echo $breadCrumbs ?>
<h1><?php echo $product['name'] ?></h1>

<div class="product">
    <div class="product-details">
        <div class="product-image">
            <img src="<?php echo $product['image'] ?>">
        </div>
        <div class="product-content">
            <div class="product-price">
                <span><?php echo number_format($product['price'], 0, ',', ' ') ?></span>
                <button class="buy">Купить</button>
            </div>
            <div class="product-description">
                <?php echo $product['description'] ?>
            </div>
        </div>
    </div>
</div>
<title>
    <form name="comment" action="comment.php" method="post">
        <p>
            <label>Имя:</label>
            <input> type="text" name="name" />
        </p>
        <p>
            <label>Комментарии:</label>
            <br />
            <textarea name="text_comment" cols="30" rows="50"></textarea>
        </p>
        <p>
            <input> type="submit" value="Отправить" />
        </p>
    </form>
</title>