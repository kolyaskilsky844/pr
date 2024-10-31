<div class="contact-form">
    <h1>Контакти</h1>
    <form action="send_message.php" method="post">
        <label for="name">Ім'я</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Повідомлення</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button class="button" type="submit">Надіслати</button>
    </form>
</div>
