<?php
global $app;
?>
<div class="header">
    <ul class="menu">
        <li>
            <a href="/form">Войти</a>
        </li>
        <?php foreach (config('menu') as $menu): ?>
        <li>
            <a href="<?php echo $menu['url'] ?>"><?php echo $menu['title'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>