<?php
session_start(); // Инициализация сессии

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Сохранение введенных данных в переменной сессии
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password']; // Добавить проверку вашего пароля
    
    // Перенаправление на страницу приветствия
    header('Location: welcome.php');
    exit();
}
?>

<form method="post" action="">
    Имя пользователя: <input type="text" name="username" required><br>
    Пароль: <input type="password" name="password" required><br>
    <input type="submit" value="Войти">
</form>