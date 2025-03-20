<?php
setcookie('preferences', 'dark_mode', time() + (604800), "/"); // 604800 секунд = 1 неделя
if(isset($_COOKIE['preferences'])) {
    print "Кука 'preferences' установлена: " . $_COOKIE['preferences'];
} else {
    print "Кука 'preferences' не установлена.";
}