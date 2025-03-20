<?php
session_start(); // Инициализация сессии

// Инициализация корзины, если её нет
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Добавление товара
if (isset($_POST['add'])) {
    $_SESSION['cart'][] = $_POST['item'];
}

// Удаление товара
if (isset($_POST['remove'])) {
    if (($key = array_search($_POST['item'], $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
}
?>

<h2>Корзина</h2>
<form method="post">
    <input type="text" name="item" required placeholder="Название товара">
    <input type="submit" name="add" value="Добавить в корзину">
    <input type="submit" name="remove" value="Удалить из корзины">
</form>

<h3>Содержимое корзины:</h3>
<ul>
    <?php foreach ($_SESSION['cart'] as $item): ?>
        <li><?= htmlspecialchars($item); ?></li>
    <?php endforeach; ?>
</ul>