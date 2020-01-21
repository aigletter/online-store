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
<div class="products-container">
    <?php foreach($products as $key=>$product): ?>
        <?php if($key % 4 == 0): ?>
            <div class="product-row">
        <?php endif; ?>
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
        <?php if($key % 4 == 3): ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<div class="pagination">
    Страницы:&nbsp;&nbsp;
    <?php for($i = 1; $i <= $pages; $i++): ?>
        <a href="?id=<?php echo $_GET['id'] ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
    <?php endfor; ?>
</div>