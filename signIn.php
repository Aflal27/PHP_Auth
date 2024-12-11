<?php include("dbConn.php") ?>
<?php
$email = $_POST["email"];
$password = $_POST["password"];

// Select query
if (!empty($email)) {
    $sql = "SELECT * FROM signUp WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if ($data) {
        $dataPassword = $data['password'];

        if ($password === $dataPassword) {
            header("location:home.php?email=$email");
        } else {
            header("location:signIn.php?error=Incorrect password!");
        }
    } else {
        header("location:signIn.php?error=Email not found!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gradient-to-b from-blue-50 to-purple-100">
    <div class="h-screen w-screen flex items-center justify-center">
      <form
        action="signIn.php"
        method="post"
        class="flex flex-col gap-6 bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-purple-600 text-center mb-4">Welcome Back</h1>
        <p class="text-center text-gray-500 mb-6">Please sign in to continue.</p>

        <input
          required
          type="text"
          placeholder="Email"
          class="border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-500 focus:outline-none"
          id="email"
          name="email"
        />

        <input
          required
          type="password"
          placeholder="Password"
          class="border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-500 focus:outline-none"
          id="password"
          name="password"
        />

        <button
          type="submit"
          class="bg-purple-600 p-3 text-white font-semibold hover:bg-purple-700 transition-all rounded-lg uppercase">
          Sign In
        </button>

        <div class="flex items-center justify-center gap-2 text-sm">
          <p class="text-gray-500">Don’t have an account?</p>
          <a href="signUp.html" class="text-purple-600 font-medium hover:underline">Sign Up</a>
        </div>

        <?php 
        $errorMsg = $_GET['error'] ?? '';
        if (!empty($errorMsg)) {
          echo "<div class='bg-red-400 text-white text-center p-2 rounded mt-4'>";
          echo htmlspecialchars($errorMsg);
          echo "</div>";
        }
        ?>
      </form>
    </div>
  </body>
</html>
