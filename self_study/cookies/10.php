<?php

setcookie('session_id', '', time() - 3600, "/");

if(!isset($_COOKIE['session_id'])) {
    print "Кука 'session_id' успешно удалена.";
} else {
    print "Кука 'session_id' всё ещё существует.";
}