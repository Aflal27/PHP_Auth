<?php include("dbConn.php") ?>

<?php
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get product details from the form
    $name = $_POST['product-name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $imagePath = 'uploads/' . basename($imageName);

        // Move the uploaded file to the uploads folder
        if (move_uploaded_file($imageTmpPath, $imagePath)) {
            // Prepare and bind the SQL query
            $stmt = $conn->prepare("INSERT INTO products (name, price, image, description) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $price, $imagePath, $description);

            if ($stmt->execute()) {
                echo "Product added successfully!";
            } else {
                echo "Error adding product: " . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "No image selected.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Product - Velvet Vogue</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Sidebar (same as previous implementation) -->

  <div class="flex-1 p-6">
    <h1 class="text-3xl font-semibold mb-6">Add New Product</h1>

    <!-- Add Product Form -->
    <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
      <h2 class="text-2xl font-semibold mb-4">Add Product Details</h2>
      <form action="product.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4">
          <label for="product-name" class="block text-gray-700">Product Name</label>
          <input type="text" id="product-name" name="product-name" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
          <label for="price" class="block text-gray-700">Price</label>
          <input type="number" id="price" name="price" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
          <label for="description" class="block text-gray-700">Description</label>
          <textarea id="description" name="description" class="w-full px-4 py-2 border rounded-md" required></textarea>
        </div>

        <div class="mb-4">
          <label for="image" class="block text-gray-700">Product Image</label>
          <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
          <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Add Product</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer (same as previous implementation) -->

</body>
</html>
