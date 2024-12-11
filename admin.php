<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - Velvet Vogue</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Simulating the men.js data
    const men = [
      { id: 1, title: "Men's Jacket", price: 109.95, description: "Perfect for walks in the forest.", category: "men's clothing", image: "./images/men/img-1.jpg", rating: { rate: 3.9, count: 120 } },
      { id: 2, title: "Leather Boots", price: 129.95, description: "Durable boots for hiking.", category: "men's clothing", image: "./images/men/img-2.jpg", rating: { rate: 4.5, count: 150 } },
      { id: 3, title: "Sports Shirt", price: 49.95, description: "Comfortable shirt for outdoor activities.", category: "men's clothing", image: "./images/men/img-3.jpg", rating: { rate: 4.0, count: 90 } },
      { id: 4, title: "Casual Pants", price: 79.95, description: "Stylish and comfortable casual pants.", category: "men's clothing", image: "./images/men/img-4.jpg", rating: { rate: 4.2, count: 110 } },
      { id: 5, title: "Winter Jacket", price: 149.95, description: "Keep warm during winter walks.", category: "men's clothing", image: "./images/men/img-5.jpg", rating: { rate: 4.8, count: 200 } },
      { id: 6, title: "Backpack", price: 59.95, description: "Perfect for everyday use.", category: "men's clothing", image: "./images/men/img-6.jpg", rating: { rate: 3.9, count: 120 } },
    ];

    // Function to render product list
    function renderProducts() {
      const productContainer = document.getElementById('product-list');
      productContainer.innerHTML = ''; // Clear existing content
      men.forEach(product => {
        const productCard = `
          <div class="bg-white shadow-xl rounded-lg p-6 text-center mb-6">
            <img src="${product.image}" alt="${product.title}" class="w-full h-48 object-cover rounded-lg mb-4" />
            <h3 class="text-xl font-semibold text-gray-800">${product.title}</h3>
            <p class="text-gray-500 mt-2">${product.description}</p>
            <div class="mt-4 text-lg font-bold">$${product.price}</div>
            <div class="mt-2 flex justify-between items-center text-gray-600">
              <span>Rating: ${product.rating.rate} (${product.rating.count} reviews)</span>
              <div class=" flex items-center">
                <button onclick="editProduct(${product.id})" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Edit</button>
                <button onclick="deleteProduct(${product.id})" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition ml-2">Delete</button>
              </div>
            </div>
          </div>
        `;
        productContainer.innerHTML += productCard;
      });
    }

    // Function to edit product (Placeholder for actual functionality)
    function editProduct(id) {
      alert('Edit product with ID: ' + id);
      // Add functionality to edit product
    }

    // Function to delete product
    function deleteProduct(id) {
      const confirmDelete = confirm('Are you sure you want to delete this product?');
      if (confirmDelete) {
        const productIndex = men.findIndex(product => product.id === id);
        if (productIndex > -1) {
          men.splice(productIndex, 1);
          renderProducts(); // Re-render product list
        }
      }
    }

    // Initial render of products
    window.onload = renderProducts;
  </script>
</head>
<body class="bg-gray-50">

  <!-- Sidebar -->
  <div class="flex h-screen">
    <div class="bg-gradient-to-b from-indigo-600 to-indigo-800 text-white w-64 py-8 px-6 shadow-lg">
      <div class="text-center mb-10">
        <h2 class="text-3xl font-bold">
          <a href="home.php">Velvet Vogue Admin</a>
        </h2>
      </div>
      <ul class="space-y-6">
        <li><a href="#" class="hover:bg-indigo-700 flex items-center space-x-4 px-4 py-2 rounded-lg transition-all"><i class="fa fa-tachometer-alt"></i><span class="font-semibold">Dashboard</span></a></li>
        <li><a href="product.php" class="hover:bg-indigo-700 flex items-center space-x-4 px-4 py-2 rounded-lg transition-all"><i class="fa fa-box"></i><span class="font-semibold">Products</span></a></li>
        <li><a href="orders.php" class="hover:bg-indigo-700 flex items-center space-x-4 px-4 py-2 rounded-lg transition-all"><i class="fa fa-shopping-cart"></i><span class="font-semibold">Orders</span></a></li>
        <li><a href="customers.php" class="hover:bg-indigo-700 flex items-center space-x-4 px-4 py-2 rounded-lg transition-all"><i class="fa fa-users"></i><span class="font-semibold">Customers</span></a></li>
        <li><a href="reports.php" class="hover:bg-indigo-700 flex items-center space-x-4 px-4 py-2 rounded-lg transition-all"><i class="fa fa-chart-line"></i><span class="font-semibold">Reports</span></a></li>
        <li><a href="settings.php" class="hover:bg-indigo-700 flex items-center space-x-4 px-4 py-2 rounded-lg transition-all"><i class="fa fa-cogs"></i><span class="font-semibold">Settings</span></a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8 overflow-y-auto">
      <!-- Top Bar -->
      <div class="flex justify-between items-center mb-10">
        <h1 class="text-4xl font-bold text-gray-900">Product Management</h1>
        <div class="flex items-center space-x-6">
          <span class="text-gray-600">Welcome, Admin</span>
          <button class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Log Out</button>
        </div>
      </div>

      <!-- Dashboard Stats -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <!-- Total Sales -->
        <div class="bg-white shadow-xl rounded-lg p-6 flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Sales</p>
            <h2 class="text-3xl font-semibold text-indigo-600">$23,450</h2>
          </div>
          <div class="bg-indigo-600 text-white p-4 rounded-full">
            <i class="fa fa-dollar-sign text-2xl"></i>
          </div>
        </div>
        <!-- Total Orders -->
        <div class="bg-white shadow-xl rounded-lg p-6 flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Orders</p>
            <h2 class="text-3xl font-semibold text-blue-600">1,234</h2>
          </div>
          <div class="bg-blue-600 text-white p-4 rounded-full">
            <i class="fa fa-box text-2xl"></i>
          </div>
        </div>
        <!-- Total Customers -->
        <div class="bg-white shadow-xl rounded-lg p-6 flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Customers</p>
            <h2 class="text-3xl font-semibold text-green-600">345</h2>
          </div>
          <div class="bg-green-600 text-white p-4 rounded-full">
            <i class="fa fa-users text-2xl"></i>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Products -->
        <div class="bg-white shadow-xl rounded-lg p-8 text-center hover:bg-indigo-50 transition-all">
          <h3 class="text-2xl font-semibold text-gray-800">Manage Products</h3>
          <p class="text-gray-600 mt-4">Add, Edit, or Delete products in your store.</p>
          <a href="products.php" class="mt-6 inline-block bg-indigo-600 text-white px-8 py-4 rounded-lg hover:bg-indigo-700 transition">Manage Products</a>
        </div>

        <!-- Orders -->
        <div class="bg-white shadow-xl rounded-lg p-8 text-center hover:bg-indigo-50 transition-all">
          <h3 class="text-2xl font-semibold text-gray-800">Manage Orders</h3>
          <p class="text-gray-600 mt-4">View and manage all orders made by customers.</p>
          <a href="orders.php" class="mt-6 inline-block bg-green-600 text-white px-8 py-4 rounded-lg hover:bg-green-700 transition">Manage Orders</a>
        </div>
      </div>

      <!-- Product List -->
      <div id="product-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Products will be rendered here dynamically -->
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
