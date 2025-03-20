<?php
session_start(); // Инициализация сессии

// Установка переменной сессии
$_SESSION['username'] = 'student';

// Проверка наличия переменной и вывод её значения
if (isset($_SESSION['username'])) {
    print  "Имя пользователя: " . $_SESSION['username'];
} else {
    print "Переменная сессии не установлена.";
}