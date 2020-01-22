<h3>Добавление товара</h3>
<body>
<p> <?php echo $messages['add']; ?> </p>
<form method="post" action="" enctype="multipart/form-data" autocomplete="on">
    <lablel>Наименование категории</lablel>
    <br>
    <select name="category" size="1">
        <option selected value='not'>Выберите категорию</option>
        <?php
        foreach($passcategory as $key => $value) {
            echo '<option value=' . $key . '>' . $value . '</option>';
        }
        ?>
    </select>
    <br>
    <lablel>Наименование товара</lablel>
    <br>
    <input name="productname">
    <br>
    <lablel>Цена товара</lablel>
    <br>
    <input name="prise">
    <br>
    <lablel>Описание товара</lablel>
    <br>
    <textarea name="specification" cols="36" rows="8"></textarea>
    <br>
    <lablel>Страна-производитель</lablel>
    <br>
    <input name="country">
    <br>
    <lablel>Количество товара</lablel>
    <br>
    <input name="number">
    <br>
    <input type="file" name="avatar">
    <button type="submit" name="upload">Отправить</button>
</form>
</body>
