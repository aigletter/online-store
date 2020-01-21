<?php
global $app;
?>
<div class="header">
    <ul class="menu">
        <?php foreach (config('menu') as $menu): ?>
        <li>
            <a href="<?php echo $menu['url'] ?>"><?php echo $menu['title'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="cart">
        <a href="cart"><i class="fa fa-cart-plus"></i></a>
    </div>

</div>