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
                <a href="recyclebin?id=<?php echo $_GET['id'] ?>"><button class="buy">Купить</button></a>
            </div>
            <div class="product-description">
                <?php echo $product['description'] ?>
            </div>
        </div>
    </div>
</div>