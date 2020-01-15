<?php
$breadCrumbs = breadCrumbs([
    [
        'url' => '/',
        'title' => 'Главная'
    ]
])
?>

<?php echo $breadCrumbs ?>

<h1>Категория "<?php echo $category['name'] ?>"</h1>
<div class="category">
    <div class="category-description">
        <?php echo $category['description'] ?>
    </div>
</div>
<div class="products">
    <?php foreach($products as $product): ?>
        <div class="product">
            <a href="/product?id=<?php echo $product['id'] ?>" class="product-image">
                <img src="<?php echo $product['image'] ?>">
            </a>
            <a href="/product?id=<?php echo $product['id'] ?>" class="product-name">
                <?php echo $product['name'] ?>
            </a>
            <div class="product-price">
                <span><?php echo number_format($product['price'], 0, ',', ' ') ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>