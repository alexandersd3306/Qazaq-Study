<?php
session_start();

// Проверка наличия ключа 'user_id' в сессии
if (isset($_SESSION['user_id'])) {
    echo "valid";
} else {
    echo "not valid";
}
?>
