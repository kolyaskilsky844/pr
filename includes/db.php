<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gun_store;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Помилка підключення: " . $e->getMessage();
}
?>
