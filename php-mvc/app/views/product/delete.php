<p>
    <?= \Core\Url::getLink('/product/list', 'Назад до списку'); ?>
</p>

<?php
$product =  $this->get('product');
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input name="id" type="hidden" value="<?php echo $product['id'] ?>">
    <input type="submit" value="Вилучити">
</form>
