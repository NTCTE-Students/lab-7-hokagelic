<?php
session_start(); // Инициализация сессии

if (isset($_SESSION['username'])) {
    echo "Добро пожаловать, " . $_SESSION['username'] . "!";
    echo "<br><a href='logout.php'>Выйти</a>"; // Ссылка на выход
} else {
    header('Location: login.php'); // Перенаправление на страницу входа, если нет сессии
    exit();
}