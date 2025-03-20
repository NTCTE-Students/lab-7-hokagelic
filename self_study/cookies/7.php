<?php
// Установка куки 'theme' с значением 'light'
setcookie('theme', 'light', time() + (86400), "/"); // 86400 секунд = 1 день

// Форма для изменения значения куки на 'dark'
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('theme', 'dark', time() + (86400), "/"); // Изменяем на dark
    print "Тема изменена на: dark";
} else {
    print "Текущая тема: " . ($_COOKIE['theme'] ?? 'Не установлена');
}
?>

<form method="post" action="">
    <input type="submit" value="Изменить на Dark">
</form>