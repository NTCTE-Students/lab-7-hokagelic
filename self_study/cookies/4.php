<?php
setcookie('language', 'English', time() + (7200), "/"); // 7200 секунд = 2 часа
if(isset($_COOKIE['language'])) {
    print "Кука 'language' установлена: " . $_COOKIE['language'];
} else {
    print "Кука 'language' не установлена.";
}