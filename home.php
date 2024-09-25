<?php include("dbConn.php") ?>
<?php
$email = $_GET['email'];

if (!$email == '') {
    $sql = "select * from users where EMAIL = '$email' "; 
    $data = mysqli_fetch_array(mysqli_query($conn,$sql));
    $name = $data['USERNAME'];
    $email = $data['EMAIL'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
    <div class=" flex">

        <!-- profile -->
        <div class=" p-5">
          <div class=" w-[500px] h-[500px] bg-blue-400 rounded-full">
                <?php echo "<p class='w-full h-full flex items-center justify-center uppercase text-2xl text-white'> $name </p>" ?>
          </div>
        </div>
        <!-- profile_details -->
         <div class= " mt-20 flex flex-col  gap-3">
            <div class="">
                <p class=" text-xl font-bold ">Name:</p>
                <?php echo "<p class =' text-sm text-gray-500 font-semibold'> $name </p>" ?>
            </div>
            <div class="">
                <p class=" text-xl font-bold ">Email:</p>
                <?php echo "<p class =' text-sm text-gray-500 font-semibold'> $email </p>" ?>

            </div>

            <div class="">
                <button class=" bg-green-600 text-white px-7 py-2 rounded hover:opacity-75 transition duration-300">Edit</button>
                <button class=" bg-red-600 text-white px-4 py-2 rounded hover:opacity-75 transition duration-300">Delete</button>
                
            </div>
         </div>
    </div>
</body>


</html>