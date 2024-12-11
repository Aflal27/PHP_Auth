<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment - Velvet Vogue</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-gray-900 text-white py-6">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">Secure Payment</h1>
      <p class="text-gray-300 mt-2">Complete your order securely and conveniently.</p>
    </div>
  </header>

  <!-- Payment Form -->
  <main class="container mx-auto px-6 py-10">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-3xl mx-auto">
      <form action="#" method="POST">
        <!-- Payment Method Selection -->
        <div class="mb-6">
          <label class="block text-gray-700 font-semibold mb-2">Select Payment Method</label>
          <div class="space-x-4">
            <label class="inline-flex items-center space-x-2">
              <input type="radio" name="payment-method" value="credit-card" class="form-radio text-blue-600">
              <span class="text-gray-700">Credit Card</span>
            </label>
            <label class="inline-flex items-center space-x-2">
              <input type="radio" name="payment-method" value="paypal" class="form-radio text-blue-600">
              <span class="text-gray-700">PayPal</span>
            </label>
          </div>
        </div>

        <!-- Credit Card Form -->
        <div id="credit-card-form" class="space-y-6">
          <div class="mb-4">
            <label for="card-number" class="block text-gray-700 font-semibold mb-2">Card Number</label>
            <input type="text" id="card-number" name="card-number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="1234 5678 9876 5432" required />
          </div>

          <div class="flex space-x-4 mb-4">
            <div class="w-1/2">
              <label for="expiry-date" class="block text-gray-700 font-semibold mb-2">Expiry Date</label>
              <input type="text" id="expiry-date" name="expiry-date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="MM/YY" required />
            </div>
            <div class="w-1/2">
              <label for="cvv" class="block text-gray-700 font-semibold mb-2">CVV</label>
              <input type="text" id="cvv" name="cvv" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="123" required />
            </div>
          </div>

          <div class="mb-4">
            <label for="card-name" class="block text-gray-700 font-semibold mb-2">Cardholder's Name</label>
            <input type="text" id="card-name" name="card-name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="John Doe" required />
          </div>
        </div>

        <!-- PayPal Form (Hidden initially) -->
        <div id="paypal-form" class="hidden">
          <p class="text-gray-600">Redirecting to PayPal for payment...</p>
        </div>

        <!-- Payment Summary -->
        <div class="mt-6 flex justify-between items-center">
          <p class="text-lg font-semibold text-gray-700">Total: $<span id="payment-total">99.99</span></p>
          <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
            Pay Now
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

  <script>
    // Toggle visibility of payment methods
    const creditCardOption = document.querySelector('input[value="credit-card"]');
    const paypalOption = document.querySelector('input[value="paypal"]');
    const creditCardForm = document.getElementById('credit-card-form');
    const paypalForm = document.getElementById('paypal-form');

    creditCardOption.addEventListener('change', () => {
      creditCardForm.classList.remove('hidden');
      paypalForm.classList.add('hidden');
    });

    paypalOption.addEventListener('change', () => {
      paypalForm.classList.remove('hidden');
      creditCardForm.classList.add('hidden');
    });

    // Initially show the Credit Card form
    creditCardForm.classList.remove('hidden');
    paypalForm.classList.add('hidden');
  </script>

</body>
</html>
<?php include("footer.php") ?>
