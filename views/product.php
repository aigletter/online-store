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

<form name="comment" action="comment" method="POST">
    <title>Оставьте комментарий</title>
        <p>Имя:</p>
        <input type="text" name="name" style="display: block"/>
        <p>Комментарии:</p>
        <br />
        <textarea name="comment" cols="40" rows="10"></textarea>
        <input type="hidden" name="product_id"/>
        <input type="submit" name="buttom" value="Отправить"/>
</form>


