<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categories - Velvet Vogue</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-purple-50 to-purple-100">
  <!-- Category Cards -->
  <main class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-center text-purple-700 mb-10">Shop by Categories</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
      <!-- Men Card -->
      <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <img src="./images/thumb02.png" alt="Men's Fashion" class="w-full h-52 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
        <div class="absolute bottom-4 left-4">
          <h2 class="text-3xl font-bold text-white">Men</h2>
        </div>
        <div class="p-6 text-center">
          <p class="text-gray-600">Explore men's fashion, from casual wear to formal attire.</p>
          <a href="men.php" class="mt-4 inline-block bg-purple-600 text-white py-2 px-4 rounded-full hover:bg-purple-700 transition">Shop Now</a>
        </div>
      </div>

      <!-- Women Card -->
      <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <img src="./images/model-1.png" alt="Women's Fashion" class="w-full h-52 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
        <div class="absolute bottom-4 left-4">
          <h2 class="text-3xl font-bold text-white">Women</h2>
        </div>
        <div class="p-6 text-center">
          <p class="text-gray-600">Browse through the latest trends in women's fashion.</p>
          <a href="women.php" class="mt-4 inline-block bg-pink-600 text-white py-2 px-4 rounded-full hover:bg-pink-700 transition">Shop Now</a>
        </div>
      </div>

      <!-- Kid Card -->
      <div class="relative bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <img src="./images/thumb03.png" alt="Kid's Fashion" class="w-full h-52 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-50"></div>
        <div class="absolute bottom-4 left-4">
          <h2 class="text-3xl font-bold text-white">Kid</h2>
        </div>
        <div class="p-6 text-center">
          <p class="text-gray-600">Find adorable clothing for kids with comfort and style.</p>
          <a href="kid.php" class="mt-4 inline-block bg-yellow-500 text-white py-2 px-4 rounded-full hover:bg-yellow-600 transition">Shop Now</a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
<?php include("footer.php") ?>
