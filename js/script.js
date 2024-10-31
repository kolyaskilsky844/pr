document.addEventListener('DOMContentLoaded', () => {
    const mainContent = document.getElementById('main-content');
    const cartCountDisplay = document.getElementById('cart-count');

    function loadPage(page) {
        fetch(`${page}.php`)
            .then(response => response.text())
            .then(data => {
                mainContent.innerHTML = data;
                attachCartButtons();
            })
            .catch(error => console.error('Помилка завантаження:', error));
    }

    function addToCart(productId) {
        fetch('add_to_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `product_id=${productId}`,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                cartCountDisplay.textContent = data.cart_count;
                alert(data.message);
            } else {
                alert('Помилка: ' + data.message);
            }
        })
        .catch(error => console.error('Помилка додавання до кошика:', error));
    }

    function attachCartButtons() {
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.getAttribute('data-product-id');
                addToCart(productId);
            });
        });
    }

    document.querySelectorAll('nav ul li a').forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const page = link.getAttribute('data-page');
            if (page) {
                loadPage(page);
            }
        });
    });
});




