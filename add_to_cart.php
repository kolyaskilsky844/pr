<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product_id = $_POST['product_id'] ?? null;

if ($product_id) {
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = 1;
    } else {
        $_SESSION['cart'][$product_id]++;
    }

    echo json_encode([
        'status' => 'success',
        'message' => 'Товар додано до кошика',
        'cart_count' => array_sum($_SESSION['cart']),
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Не вдалося додати товар до кошика',
    ]);
}
