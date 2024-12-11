<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Velvet Vogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Header -->
    <header class="bg-gray-200 ">
      <div
        class="container mx-auto px-4 py-4 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
          <h1 class="text-2xl font-serif font-bold">
            <a href="home.php">Velvet Vogue</a>
          </h1>
        </div>
          <!-- serachBar -->
        <div className="relative hidden md:block">
              <input
                type="text"
                placeholder="Search"
                class="bg-gray-100 border border-gray-300 rounded-full py-2 px-4 pl-10 w-64 focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-200"
              />
              <i class="fa fa-search   text-gray-500" aria-hidden="true"></i>
            </div>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-6 items-center">
          <a href="#" class="hover:text-gray-400">Home</a>
          <a href="category.php" class="hover:text-gray-400">Category</a>
          <a href="#" class="hover:text-gray-400">Shop</a>
          <a href="customer.php" class="hover:text-gray-400">Customer Support</a>
          <a href="cart.php">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <div class="">
            <a
              href="signIn.php"
              class="hover:text-gray-200  rounded-br-xl bg-blue-500 text-white rounded-tl-xl  p-2"
              >Sign In</a
            >
          </div>
        </nav>

        <!-- Mobile Menu Button -->
        <button
          class="md:hidden text-gray-400 hover:text-white focus:outline-none"
          id="menu-toggle">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            class="w-6 h-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div class="hidden bg-gray-800 md:hidden" id="mobile-menu">
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-700"
          >Product Categories</a
        >
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Shopping Cart</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-700"
          >Customer Support</a
        >
      </div>
    </header>

    <script>
      // Toggle Mobile Menu
      const menuToggle = document.getElementById("menu-toggle");
      const mobileMenu = document.getElementById("mobile-menu");

      menuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    </script>
  </body>
</html>

