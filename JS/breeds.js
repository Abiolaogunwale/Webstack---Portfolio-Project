document.addEventListener("DOMContentLoaded", function() {
    // Get the modal
    var modal = document.querySelector('.add-modal');

    // Get the button that opens the modal
    var btn = document.querySelector('.add-items');

    // Get the <span> element that closes the modal
    var span = document.querySelector('.add-modal i.fa.fa-times');

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Add item functionality
    var submitItemBtn = document.getElementById('submitItem');
    submitItemBtn.addEventListener('click', function(event) {
        event.preventDefault();
        var title = document.getElementById('title').value;
        var price = document.getElementById('price').value;
        var imageUrl = document.getElementById('imageUrl').value;
        var desc = document.getElementById('desc').value;

        // Here, you can perform any action you want with the data, like adding it to a list, sending it to a server, etc.
        console.log("Title: ", title);
        console.log("Price: ", price);
        console.log("Image URL: ", imageUrl);
        console.log("Description: ", desc);

        // Clear input fields
        document.getElementById('title').value = '';
        document.getElementById('price').value = '';
        document.getElementById('imageUrl').value = '';
        document.getElementById('desc').value = '';

        // Close modal
        modal.style.display = "none";
    });

    // Cart functionality
    var cartCount = document.querySelector('.cart-count');
    var addToCartBtns = document.querySelectorAll('.breeds-items-btn');
    var cartItemCount = 0;

    addToCartBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            cartItemCount++;
            cartCount.textContent = cartItemCount;
        });
    });
});
