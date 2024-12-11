<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class=" m-10 ">
       <div class=" flex gap-4">
        <!-- thumb01 -->
         <div class="  bg-orange-200 w-[600px] h-[410px] flex items-center p-4 rounded-lg">
            <div class="">
                <p class=" text-gray-700 text-2xl font-semibold font-serif">Women's fashion</p>
                <p class=" text-gray-500">Sitamet. consectetur adipiscing elit.sed do siusmod tempor incidid-unt labore edolore magna aliquapendisto ultrices gravida.</p>
            </div>
            <img class=" w-[400px] h-[400px] object-contain" src="./images/model-1.png" alt="">
         </div>

         <!-- thumb02 -->
          <div class=" flex flex-col gap-2">

              <div class="  bg-blue-200 w-[300px] h-[200px] flex items-center p-4 rounded-lg">
                 <div class="">
                     <p class=" text-gray-700 text-2xl font-semibold font-serif">Men's fashion</p>
                    <p class=" text-xs text-gray-500" >368 items</p>
                 </div>
                 <img class=" w-[200px] h-[200px] object-contain" src="./images/thumb02.png" alt="">
              </div>
              <div class="  bg-pink-200 w-[300px] h-[200px] flex items-center p-4 rounded-lg">
                 <div class="">
                     <p class=" text-gray-700 text-2xl font-semibold font-serif">Cosmetics</p>
                    <p class=" text-xs text-gray-500" >128 items</p>
                 </div>
                 <img class=" w-[170px] h-[170px] object-contain" src="./images/thumb04.png" alt="">
              </div>
          </div>
         <!-- thumb03 -->
          <div class=" flex flex-col gap-2">

              <div class="  bg-slate-200 w-[300px] h-[200px] flex items-center p-4 rounded-lg">
                 <div class="">
                     <p class=" text-gray-700 text-2xl font-semibold font-serif">Kid's fashion</p>
                    <p class=" text-xs text-gray-500" >268 items</p>
                 </div>
                 <img class=" w-[200px] h-[200px] object-contain" src="./images/thumb03.png" alt="">
              </div>
              
              <div class="  bg-pink-300 w-[300px] h-[200px] flex items-center p-4 rounded-lg">
                 <div class="">
                     <p class=" text-gray-700 text-2xl font-semibold font-serif">Accessories</p>
                    <p class=" text-xs text-gray-500" >108 items</p>
                 </div>
                 <img class=" w-[170px] h-[170px] object-contain" src="./images/thumb05.png" alt="">
              </div>
          </div>

       </div>
    </div>

    <div class=" flex items-center justify-between mx-[150px]">
        <p class=" font-semibold text-xl text-gray-600">NEW PRODUCT</p>
        <div class=" flex items-center gap-3 font-semibold text-sm  text-gray-600">
            <p class=" hover:opacity-50 hover:text-blue-300 cursor-pointer">All</p>
            <p class=" hover:opacity-50 hover:text-blue-300 cursor-pointer">Men's</p>
            <p class=" hover:opacity-50 hover:text-blue-300 cursor-pointer">Women's</p>
            <p class=" hover:opacity-50 hover:text-blue-300 cursor-pointer">Kid's</p>
            <p class=" hover:opacity-50 hover:text-blue-300 cursor-pointer">Accessories</p>
            <p class=" hover:opacity-50 hover:text-blue-300 cursor-pointer">Cosmotics</p>

        </div>
    </div>
    <div class=" mx-[150px]">
        <?php include("men.php") ?>
    </div>
    <div class="">
        <?php include("women.php") ?>
    </div>
    
</body>
</html>
<?php include("footer.php") ?>
