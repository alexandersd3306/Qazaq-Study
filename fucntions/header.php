<?php session_start(); ?>
<?php   

function translate($ogojestko){
    switch($ogojestko){
        case 1: 
            return "С нуля";
            break;
        case 2: 
            return "Низкий уровень";
            break;
        case 3: 
            return "Средний уровень";
            break;
        case 4: 
            return "Высокий уровень";
            break;
        default:
            return "Ошибка, выберетe уровень";
            break;
    }
} 

function photo($ogojestko){
    switch($ogojestko){
        case 2: 
            return '<img src="/img/niz.png" alt="аватарка">';
            break;
        case 3: 
            return '<img src="/img/sred.png" alt="аватарка">';
            break;
        case 4: 
            return '<img src="/img/vis.png" alt="аватарка">';
            break;
        default: 
            return '<img src="/img/snul.png" alt="аватарка">';
            break;
    }
}

function lvl($ogojestko){
    switch($ogojestko){
        case 2: 
            return '/nizkiy.php';
            break;
        case 3: 
            return "/sredniu.php";
            break;
        case 4: 
            return "/highlvl.php";
            break;
        default: 
            return '/snyla.php';
            break;
    }
}


?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/script.js" language="JavaScript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qazaq stydy</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script languege="javascript" src="js/scenariy.js" defer></script>
    <script languege="javascript" src="js/script.js" defer></script>

</head>
<header class="header">
    <a src="index.php" alt="Qazaq stydy">
        <img src="img/logo.jpg" alt="logo" class="logo">
    </a>
    <div class="langd">
    <?php
session_start();

// Проверка наличия ключа 'user_id' в сессии
if (isset($_SESSION['user_id'])) {
    // Если пользователь вошел в аккаунт
    echo '<a href="LCcabinet.php" class="LC" style="    width: 12%;    transform: translate(-145%);
    ">
            <div class="a">
                <p>Мой аккаунт</p>
            </div>
          </a>';
} else {
    // Если пользователь не вошел в аккаунт
    echo '<a href="cabinet.php" class="LC" style="    width: 12%;    transform: translate(-145%);
    ">
            <div class="a">
                <p>Вход в аккаунт</p>
            </div>
          </a>';
}
?>
        <a href="index.php" class="LC-main" style="transform: translate(-371%); ">
            <div class="a" style= "padding: 0 0; margin: 15px; ">
                <p > Главная </p>
            </div>
        </a>
        <a href="/fucntions/logout.php" class="LC-vih">
            <div class="a">
                <p> Выйти </p>
            </div>
        </a>
    </div>
</header>