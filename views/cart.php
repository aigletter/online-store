<h1>Корзина</h1>

<div class="cart-list">
    <table>
        <tr>
            <th>Название</th>
            <th>Цена</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>