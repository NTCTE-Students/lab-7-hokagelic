<?php
setcookie('country', 'Russia', time() + (86400), "/"); // 86400 секунд = 1 день
if(isset($_COOKIE['country'])) {
    print "Добро пожаловать в " . $_COOKIE['country'] . "!";
} else {
    print "Кука 'country' не установлена.";
}
