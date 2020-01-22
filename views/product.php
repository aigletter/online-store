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
            <div class="product-country">
                Страна производитель: <?php echo $product['country'] ?>
            </div>
            <div class="product-number">
                Количество: <?php echo $product['number'] ?>
            </div>
            <div class="product-description">
                <?php echo $product['description'] ?>
        </div>
    </div>
</div>