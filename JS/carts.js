// alert("connected")

document.addEventListener('DOMContentLoaded', function() {
    const cartItemsQty = document.querySelectorAll('.cart-items-qty');
    const cartItemsRemoveBtn = document.querySelectorAll('.cart-items-remove');
    const cartTotal = document.querySelector('.cart-total');
    const purchaseBtn = document.querySelector('.cart-items-purchase');

    // Initialize cart count
    let cartCount = 0;

    // Add event listener to quantity inputs to update cart count
    cartItemsQty.forEach(item => {
        item.addEventListener('change', function() {
            const quantity = parseInt(this.value);
            if (!is(quantity) && quantity >= 0) {
                updateCartCount();
            }
        });
    });

    // Add event listener to remove buttons to remove items from cart
    cartItemsRemoveBtn.forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.parentElement.parentElement;
            row.remove();
            updateCartCount();
        });
    });

    // Update cart count
    function updateCartCount() {
        cartCount = 0;
        cartItemsQty.forEach(item => {
            const quantity = parseInt(item.value);
            if (!isNaN(quantity) && quantity >= 0) {
                cartCount += quantity;
            }
        });
        document.querySelector('.cart-count').textContent = cartCount;
        updateCartTotal();
    }

    // Update cart total
    function updateCartTotal() {
        let totalPrice = 0;
        const cartItemsPrice = document.querySelectorAll('.cart-items-price');
        const cartItemsQty = document.querySelectorAll('.cart-items-qty');
        for (let i = 0; i < cartItemsPrice.length; i++) {
            const price = parseFloat(cartItemsPrice[i].textContent.replace('₦', '').replace(',', '').trim());
            const quantity = parseInt(cartItemsQty[i].value);
            totalPrice += price * quantity;
        }
        cartTotal.textContent = `Total: ₦${totalPrice.toFixed(2)}`;
    }

    // Purchase button functionality
    purchaseBtn.addEventListener('click', function() {
        alert('Thank you for your purchase!');
        // Reset cart
        cartCount = 0;
        document.querySelector('.cart-count').textContent = cartCount;
        document.querySelector('.cart-total').textContent = '';
        const cartItems = document.querySelectorAll('.cart-items');
        cartItems.forEach(item => item.remove());
    });

    // Initial update of cart count and total
    updateCartCount();
});
