<?php
session_start();

include('db-config.php'); // Подключаем файл с конфигурацией базы данных

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем вопрос из данных POST
    $question = $_POST['question'];
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=QazaqStudyBase", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Ошибка подключения к базе данных: " . $e->getMessage());
    }
    
    // Предполагая, что у вас есть идентификатор пользователя, сохраненный в сессии
    $user_id = $_SESSION['user_id'];

    // Проверяем, есть ли у пользователя запись в базе данных
    $existingRecord = $pdo->prepare("SELECT * FROM users WHERE id = :user_id");
    $existingRecord->execute(['user_id' => $user_id]);


    if ($existingRecord->rowCount() > 0) {
        // Если у пользователя уже есть запись, обновляем её
        $query = "UPDATE users SET question = :question WHERE id = :user_id";
    } else {
        // Если у пользователя еще нет записи, вставляем новую
        $query = "INSERT INTO users (question, id) VALUES (:question, :user_id)";
    }

    $stmt = $pdo->prepare($query);

    if ($stmt->execute(['question' => $question, 'user_id' => $user_id])) { // если ошибка какая то будет то выведет ее
        die ("Ваш вопрос успешно сохранен в базе данных.");
    } else {
        die ("Ошибка при сохранении вопроса в базе данных: " . $stmt->errorInfo()[2]);
    }
} else{
    die("Недопустимый метод запроса");
}
?>
