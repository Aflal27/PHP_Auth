<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="./utils/men.js"></script> <!-- Include men.js -->
  <script defer src="./cart.js"></script> <!-- Include cart.js -->
</head>
<body class="bg-gradient-to-b from-purple-50 to-purple-100">

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-10">
    <div id="product-details" class="bg-white shadow-xl rounded-2xl p-8 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
      <!-- Product details will be dynamically injected here -->
    </div>
  </main>

  <script>
    // Fetch product ID from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const productId = parseInt(urlParams.get('id'));

    // Use the data from men.js
    document.addEventListener('DOMContentLoaded', () => {
      const productDetails = document.getElementById('product-details');

      // Find the product by ID
      const product = men.find(item => item.id === productId);

      if (product) {
        // Display product details
        productDetails.innerHTML = `
          <div class="flex flex-col items-center">
            <img src="${product.image}" alt="${product.title}" class="w-full h-96 object-cover rounded-xl shadow-md">
          </div>
          <div class="flex flex-col justify-between">
            <div>
              <h2 class="text-4xl font-extrabold text-purple-700 mb-4">${product.title}</h2>
              <p class="text-gray-600 text-lg mb-6">${product.description}</p>
              <p class="text-purple-800 font-bold text-3xl">$${product.price}</p>
            </div>

            <div class="mt-8">
              <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">Choose Size</h3>
                <div class="flex gap-3 mt-2">
                  <button class="border border-purple-300 px-5 py-2 rounded-full hover:border-purple-500">S</button>
                  <button class="border border-purple-300 px-5 py-2 rounded-full hover:border-purple-500">M</button>
                  <button class="border border-purple-300 px-5 py-2 rounded-full hover:border-purple-500">L</button>
                  <button class="border border-purple-300 px-5 py-2 rounded-full hover:border-purple-500">XL</button>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700">Choose Color</h3>
                <div class="flex gap-3 mt-2">
                  <button class="w-10 h-10 rounded-full bg-purple-500 border-2 border-transparent hover:border-purple-700"></button>
                  <button class="w-10 h-10 rounded-full bg-red-500 border-2 border-transparent hover:border-purple-700"></button>
                  <button class="w-10 h-10 rounded-full bg-yellow-500 border-2 border-transparent hover:border-purple-700"></button>
                  <button class="w-10 h-10 rounded-full bg-blue-500 border-2 border-transparent hover:border-purple-700"></button>
                </div>
              </div>

              <div class="mt-8">
                <div class="flex gap-6 items-center">
                  <button onclick="addToCart(${product.id})" class="bg-purple-600 text-white px-8 py-3 rounded-full hover:bg-purple-700 transition">Add to Cart</button>
                  
                  <a href="men.php" class="text-purple-600 font-bold hover:underline">Back to Products</a>
                </div>
              </div>
          </div>
        `;
      } else {
        productDetails.innerHTML = `<p class="text-center text-red-500 text-lg">Product not found!</p>`;
      }
    });

    // Add to Cart Functionality
    function addToCart(productId) {
      const product = men.find(item => item.id === productId);
      if (product) {
        // Save product to localStorage or pass to cart.js
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
          existingItem.quantity += 1; // Increment quantity if already in cart
        } else {
          cart.push({ ...product, quantity: 1 }); // Add new product with quantity
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        // Alert message
        alert('Added to Cart');
      }
    }
  </script>
</body>
</html>
<?php include("footer.php") ?>
