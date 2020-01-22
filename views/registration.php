<div class="registration_block">
    <form method="post" action="" enctype="application/x-www-form-urlencoded">
        <p>Заполните данные для регистрации</p>
        <label> Имя пользователя:</label>
        <br>
        <input type="text" name="user_name" value="<?php echo ifError($_POST['user_name'], $errors)?>" required>
        <br>
        <label>Фамилия пользователя:</label>
        <br>
        <input type="text" name="last_name" value="<?php echo ifError($_POST['last_name'], $errors)?>"  required>
        <br>
        <label>Логин:</label>
        <br>
        <input type="text" name="login" value="<?php echo ifError($_POST['login'], $errors)?>" required>
        <br>
        <label>Пароль:</label>
        <br>
        <input type="password" name="password" value="<?php echo ifError($_POST['password'], $errors)?>"  required>
        <br>
        <label>Подтвердите пароль:</label>
        <br>
        <input type="password" name="confirm_password" value="<?php echo ifError($_POST['confirm_password'], $errors)?>"  required>
        <br>
        <br>
        <input type="submit" name="submit" value="Зарегистрироваться" >
    </form>
</div>


