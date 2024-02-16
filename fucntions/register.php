<?php
session_start();

include('db-config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $languageLevel = $_POST['language_level'];

    // Check if a user with the same login or email already exists
    $query = "SELECT id FROM users WHERE login = :login OR email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['login' => $login, 'email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "Пользователь с таким логином или email уже существует.";
    } else {
        // Insert a new user if no duplicate login or email is found
        $query = "INSERT INTO users (login, email, password, language_level, date) VALUES (:login, :email, :password, :language_level, NOW())";
        $stmt = $pdo->prepare($query);

        if ($stmt->execute(['login' => $login, 'email' => $email, 'password' => $password, 'language_level' => $languageLevel])) {
            // Successful registration
            $user_id = $pdo->lastInsertId();

            // Fetch the user's language level
            $query = "SELECT language_level FROM users WHERE id = :user_id";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['user_id' => $user_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $userLanguageLevel = $user['language_level'];

            // Store user data in the session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['language_level'] = $userLanguageLevel;
            $_SESSION['email'] = $email;
            $_SESSION['login'] = $login;

            // Redirect to the user's cabinet page
            header('Location: /LCcabinet.php');
            exit();
        } else {
            echo "Ошибка при регистрации пользователя.";
        }
    }
}
?>
