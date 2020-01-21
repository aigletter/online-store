<h4>Выберите товар для редактирования</h4>
<body>
<div class="photo float-left">
        <img src="<?php echo $pass['avatar'];?>">
</div>
<p> <?php
    foreach ($messages as $massage) {
        echo $massage.'<br>';
    }
    ?>
</p>
<form method="post" action=""  autocomplete="on">
    <lablel>Наименование категории</lablel>
    <br>
    <select name="category" size="1" required>
        <option ></option>
        <?php
        foreach($passcategory as $key => $value) {
            echo '<option value=' . $key . '>' . $value . '</option>';
        }
        ?>
    </select>
    <button type="submit" >Выбрать</button>
    <br>
    </form>
<form method="post" action="" enctype="multipart/form-data" autocomplete="on">
    <lablel>Наименование товара</lablel>
    <br>
    <select name="product" size="1">
        <option value=<?php echo $pass['id']; ?> ><?php echo $pass['productname']; ?>  </option>
        <?php
        foreach($passproduct as $key => $value) {
            echo '<option value=' . $key . '>' . $value . '</option>';
        }
        ?>
    </select>
    <button type="submit" >Выбрать</button>
        <h4>Редактирование товара</h4>
        <lablel> Hаименование товара</lablel>
    <br>
    <input name="productname" value="<?php echo $pass['productname']?>">
    <br>
    <lablel>Цена товара</lablel>
    <br>
    <input name="price" value="<?php echo $pass['price']?>">
    <br>
    <lablel>Описание товара </lablel>
    <br>
    <textarea name="specification"  placeholder="Введите в это окно новое описание товара, если хотите его поменять.
    Текст действующего описания находится ниже"
              cols="36" rows="8"></textarea>
    <br>
    <input type="file" name="avatar">
    <button type="submit" name="upload">Отправить</button>
</form>

<p> <?php echo $pass['specification']; ?> </p>

</body>
