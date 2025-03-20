<?php

setcookie('font_size', '16px', time() + (86400), "/");
setcookie('layout', 'grid', time() + (86400), "/");

print "Размер шрифта: " . ($_COOKIE['font_size'] ?? 'Не установлена') . "<br>";
print "Макет: " . ($_COOKIE['layout'] ?? 'Не установлена');