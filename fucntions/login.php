<?php
session_start();

include('db-config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    // Check if a user with the same login exists
    $query = "SELECT id, password, language_level, email FROM users WHERE login = :login";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['login' => $login]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && $password === $user['password']) {
        // Password matches
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['language_level'] = $user['language_level'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['login'] = $login;

        header('Location: /LCcabinet.php');
        exit();
    } else {
        echo "Неправильный логин или пароль.";
    }
}
?>
