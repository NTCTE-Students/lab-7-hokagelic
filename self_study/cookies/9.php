<?php
if(!isset($_COOKIE['loggedin'])) {
    header('Location: login.php'); // Перенаправление на страницу входа (login.php)
    exit();
} else {
    print "Вы успешно вошли в систему.";
}