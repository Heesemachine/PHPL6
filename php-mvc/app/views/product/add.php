<p>
    <?= \Core\Url::getLink('/product/list', 'Повернутись до списку товарів'); ?>
</p>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>
        Код
        <input name="sku" required>
    </label>
    </br>
    <label>
        Назва
        <input name="name" required>
    </label>
    </br>
    <label>
        Ціна
        <input name="price" type="number" step="0.01" min="0" value="0">
    </label>
    </br>
    <label>
        Кількість
        <input name="qty" type="number" step="0.001" min="0" value="1">
    </label>
    </br>
    <label>
        Опис
        </br>
        <textarea name="description" cols="80" rows="5"> </textarea>
    </label>
    </br>
    <input type="submit" value="ОК">
</form>
