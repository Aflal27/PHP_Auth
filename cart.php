<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-gray-900 text-white py-4">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">Shopping Cart</h1>
    </div>
  </header>

  <!-- Cart Content -->
  <main class="container mx-auto px-6 py-10">
    <div class="bg-white shadow-lg rounded-lg p-6">
      <!-- Cart Items -->
      <div id="cart-items" class="space-y-6">
        <!-- Items will be dynamically injected here -->
      </div>

      <!-- Total -->
      <div class="flex justify-between items-center border-t border-gray-200 mt-6 pt-6">
        <h2 class="text-lg font-bold">Total: $<span id="cart-total">0</span></h2>
        <a href="payment.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
          Checkout
        </a>
      </div>
    </div>
  </main>

  <script>
    // Load cart from localStorage
    function loadCart() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      const cartItems = document.getElementById('cart-items');
      const cartTotal = document.getElementById('cart-total');
      cartItems.innerHTML = '';
      let total = 0;

      cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        const cartItem = document.createElement('div');
        cartItem.className = 'flex justify-between items-center border-b border-gray-200 pb-4';

        cartItem.innerHTML = `
          <div class="flex items-center">
            <img src="${item.image}" alt="${item.name}" class="w-20 h-20 object-cover rounded-md mr-4">
            <div>
              <h3 class="text-lg font-semibold">${item.title}</h3>
              <p class="text-gray-500">$${item.price.toFixed(2)}</p>
            </div>
          </div>
          <div class="flex items-center space-x-4">
            <button onclick="updateQuantity(${item.id}, -1)" class="text-gray-500 hover:text-gray-800 px-3 py-2 border rounded-md">-</button>
            <span class="mx-4">${item.quantity}</span>
            <button onclick="updateQuantity(${item.id}, 1)" class="text-gray-500 hover:text-gray-800 px-3 py-2 border rounded-md">+</button>
            <button onclick="removeItem(${item.id})" class="text-red-600 hover:text-red-800 px-3 py-2 border rounded-md">Remove</button>
          </div>
          <p class="font-semibold">$${itemTotal.toFixed(2)}</p>
        `;

        cartItems.appendChild(cartItem);
      });

      cartTotal.textContent = total.toFixed(2);
    }

    // Update item quantity
    function updateQuantity(itemId, change) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      const item = cart.find(product => product.id === itemId);

      if (item) {
        item.quantity = Math.max(1, item.quantity + change); // Minimum quantity is 1
        localStorage.setItem('cart', JSON.stringify(cart));
        loadCart(); // Re-render the cart
      }
    }

    // Remove item from cart
    function removeItem(itemId) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      cart = cart.filter(item => item.id !== itemId);
      localStorage.setItem('cart', JSON.stringify(cart));
      loadCart(); // Re-render the cart
    }

    // Load cart on page load
    loadCart();
  </script>
</body>
</html>

<?php include("footer.php") ?>
