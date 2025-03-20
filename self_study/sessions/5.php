<?php
session_start(); // Инициализация сессии

// Установка времени первого и последнего посещения
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s');
}
$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');
?>

<h2>Информация о посещениях</h2>
<p>Первое посещение: <?= $_SESSION['first_visit_time']; ?></p>
<p>Последнее посещение: <?= $_SESSION['last_visit_time']; ?></p>