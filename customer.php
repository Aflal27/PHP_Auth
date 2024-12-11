<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customer Support - Velvet Vogue</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-900 text-white py-6">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">Customer Support</h1>
      <p class="text-gray-300 mt-2">We are here to help. Please fill out the form below, and we will get back to you shortly.</p>
    </div>
  </header>

  <!-- Support Form -->
  <main class="container mx-auto px-6 py-10">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-3xl mx-auto">
      <form action="#" method="POST">
        <!-- Name -->
        <div class="mb-6">
          <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Full Name</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your full name" required />
        </div>

        <!-- Email -->
        <div class="mb-6">
          <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email address" required />
        </div>

        <!-- Subject -->
        <div class="mb-6">
          <label for="subject" class="block text-gray-700 text-sm font-semibold mb-2">Subject</label>
          <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Subject of your inquiry" required />
        </div>

        <!-- Message -->
        <div class="mb-6">
          <label for="message" class="block text-gray-700 text-sm font-semibold mb-2">Your Message</label>
          <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your message here..." required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
            Submit
          </button>
        </div>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Velvet Vogue. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
<?php include("footer.php") ?>

