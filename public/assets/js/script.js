const targetDate = new Date("november 1, 2025 00:00:00").getTime();

const countdown = setInterval(() => {
    const now = new Date().getTime();
    const difference = targetDate - now;

    if (difference < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "Deal expired";
        return;
    }

    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;
}, 1000);

window.addEventListener('DOMContentLoaded', () => {
    // Testimonials Swiper
    new Swiper(".testimonialSwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".testimonialSwiper .swiper-pagination",
            clickable: true,
            // Remove the renderBullet function completely
        },
    });

    // Banner Swiper
    new Swiper(".bannerSwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        // Add more options as needed
    });
});

window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const deliveryFee = 50.00; // Standard delivery fee

    quantityInputs.forEach(input => {
        input.addEventListener('change', function () {
            updateCartItem(this);
            updateCartTotals();
        });

        // Initialize each item
        updateCartItem(input);
    });

    function updateCartItem(input) {
        const itemRow = input.closest('.cart-item');
        const unitPrice = parseFloat(itemRow.getAttribute('data-price'));
        const originalPrice = parseFloat(itemRow.getAttribute('data-original-price'));
        const quantity = parseInt(input.value);
        const itemTotal = itemRow.querySelector('.item-total');

        // Calculate new total for this item
        const newTotal = unitPrice * quantity;
        itemTotal.textContent = '$' + newTotal.toFixed(2);

        // Store calculated values for later use
        itemRow.setAttribute('data-calculated-price', newTotal);
        itemRow.setAttribute('data-calculated-original', originalPrice * quantity);
    }

    function updateCartTotals() {
        let subtotal = 0;
        let originalSubtotal = 0;

        // Calculate new subtotals
        document.querySelectorAll('.cart-item').forEach(item => {
            subtotal += parseFloat(item.getAttribute('data-calculated-price'));
            originalSubtotal += parseFloat(item.getAttribute('data-calculated-original'));
        });

        // Calculate discount (only when original price > current price)
        const discount = Math.max(originalSubtotal - subtotal, 0);

        // Update all displayed totals
        document.querySelector('.cart-subtotal').textContent = '$' + subtotal.toFixed(2);
        document.querySelector('.discount-amount').textContent = '$' + discount.toFixed(2);
        document.querySelector('.cart-grand-total').textContent = '$' + (subtotal + deliveryFee).toFixed(2);
    }
});