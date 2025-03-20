<?php
if(isset($_COOKIE['visited'])) {
    setcookie('visited', $_COOKIE['visited'] + 1, time() + (86400), "/"); // 1 день
    print "Вы посетили эту страницу " . ($_COOKIE['visited'] + 1) . " раз(а).";
} else {
    setcookie('visited', 1, time() + (86400), "/"); // 1 день
    print "Это ваш первый визит на эту страницу.";
}