<?php session_start(); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Магазин Зброї</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#" data-page="products">Продукти</a></li>
            <li><a href="#" data-page="contacts">Контакти</a></li>
            <li><a href="#" data-page="about">Про нас</a></li>
        </ul>
    </nav>

    <div>Кошик (<span id="cart-count"><?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?></span>)</div>

    <main id="main-content">
        <h1>Ласкаво просимо до Магазину Зброї</h1>
    </main>

    <!-- Секція підписки -->
    <section class="subscribe">
        <h2>Підпишіться на наші новини</h2>
        <input type="email" placeholder="Ваш Email">
        <button>Підписатися</button>
    </section>

    <script src="js/script.js" defer></script>
</body>
</html>






