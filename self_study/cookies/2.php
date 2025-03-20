<?php
setcookie('user', 'guest', time() + (86400), "/"); // 86400 секунд = 1 день
if(isset($_COOKIE['user'])) {
    print "Кука 'user' изменена на: " . $_COOKIE['user'];
} else {
    print "Кука 'user' не установлена.";
}