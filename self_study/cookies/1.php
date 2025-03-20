<?php
setcookie('user', 'admin', time() + (86400), "/"); // 86400 секунд = 1 день
if(isset($_COOKIE['user'])) {
    print "Кука 'user' установлена: " . $_COOKIE['user'];
} else {
    print "Кука 'user' не установлена.";
}
