<div class="registration_block">
        <form method="post" action="../controllers/registration.php" enctype="application/x-www-form-urlencoded">
            <p>Заполните данные для регистрации</p>
            <label> Имя пользователя:</label>
            <br>
            <input type="text" name="name" value="" required>
            <br>
            <label>Фамилия пользователя:</label>
            <br>
            <input type="text" name="second_name" value=""  required>
            <br>
            <label>Пароль</label>
            <input type="text" name="password" value=""  required>
            <br>
            <label>Подтвердите пароль</label>
            <input type="text" name="confirm_password" value=""  required>
            <br>
            <input type="submit" value="Отправить" >
        </form>

    </body>
    </html>