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
        <?php if (!checkUserData()): ?>
            <li class="reg_a">
                <a href="/registration" >Зарегистрироваться</a>
            </li>
            <li>
                <a href="/login">Войти</a>
            </li>
        <?php endif; ?>
    </ul>

</div>