<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Men's Clothing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="./utils/men.js"></script> <!-- Include men.js -->
</head>
<body class="bg-gray-50">
  <!-- Main Content -->
  <main class="container mx-auto px-6 py-10">
    <!-- Product Grid -->
    <div id="product-grid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Products will be injected here -->
    </div>
  </main>


  <script>
    // Use the data from men.js
    document.addEventListener('DOMContentLoaded', () => {
      const productGrid = document.getElementById('product-grid');

      // Iterate over the men array (from men.js)
      men.forEach(product => {
        // Create product card
        const productCard = document.createElement('div');
        productCard.className =
          'bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl';

        productCard.innerHTML = `
          <img src="${product.image}" alt="${product.title}" class="w-full h-48 object-cover">
          <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800 truncate">${product.title}</h2>
            <p class="text-gray-500 text-sm mt-2">${product.description.substring(0, 60)}...</p>
            <div class="flex justify-between items-center mt-4">
              <p class="text-gray-600 font-bold text-xs">$${product.price}</p>
              <a href="single-product.php?id=${product.id}" class="bg-pink-400 text-white px-3 py-1 text-sm rounded-xl hover:bg-pink-700 focus:outline-none">
                View Details
              </a>
            </div>
          </div>
        `;

        // Append the card to the grid
        productGrid.appendChild(productCard);
      });
    });
  </script>
</body>
</html>
