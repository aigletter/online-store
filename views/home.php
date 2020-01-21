<h1>Магазин</h1>

<div class="categories posts">
    <?php foreach($categories as $category): ?>
        <div class="category post">
            <a href="category?id=<?php echo $category['id'] ?>"
                    class="category-image display-block">
                <img src="<?php echo $category['image'] ?>">
            </a>
            <a href="category?id=<?php echo $category['id'] ?>"
                    class="category-name display-block">
                <?php echo $category['name'] ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>