<?php include("dbConn.php") ?>
<?php
$email = $_POST["email"];
$password = $_POST["password"];

// select query
if (!$email == '') {
    $sql = "select * from users where EMAIL = '$email' "; 
    $data = mysqli_fetch_array(mysqli_query($conn,$sql));
   $dataPassword = $data['PASSWORD'];
   
   if ($password === $dataPassword) {
    header("location:home.php?email=$email ");
   }else{
    header("location:signIn.php?error=somthing error!");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sign-up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
          },
        },
      };
    </script>
    <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
  </head>
  <body class="bg-gray-200">
    <div class="h-screen w-screen flex items-center justify-center">
      <form
        action="signIn.php"
        method="post"
        class="flex flex-col gap-4 bg-white p-10 rounded-md shadow-2xl">
        <input
          type="text"
          placeholder="email"
          class="border rounded-lg p-3"
          id="email"
          name="email"
         />

        <input
          type="password"
          placeholder="password"
          class="border rounded-lg p-3"
          id="password"
          name="password" />

        <button
          type="submit"
          class="bg-slate-700 p-3 text-white hover:opacity-95 disabled:opacity-80 uppercase rounded-lg">
          Sign in
        </button>
        <div class="flex items-center gap-1">
          <p>Dont have an accout?</p>
          <a href="signUp.html" class="text-blue-700"> Sign in </a>
        </div>
    
        <?php 
        $errorMsg = $_GET['error'];
        if (!$errorMsg == "") {
     echo "<div class=' bg-red-400 text-white p-2 rounded '>";
          echo $errorMsg;
          echo"</div>";
      }
    
        ?>
      </form>
    </div>
  </body>
</html>

