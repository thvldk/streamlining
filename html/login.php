<?php
include ("../php/login.php") ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="" method="POST">
    <section class="flex">
          <div class="bg-[url('../multimedia/images/buplib1.png')] w-1/2 h-screen bg-cover bg-center">
            
                
          </div>
          <div class="w-1/2 h-screen ">
            
            <div class="flex bg-blue-500 w-1/2 mx-auto h-3/4 mt-32 rounded-3xl">
                
                
                <div class="mx-auto mt-10 w-3/4">
                    <div class="w-1/2 ml-24">
                        <img src="../multimedia/images/bupc logo.png" alt="">
                    
                    </div>
                    <div class="mx-auto mt-10 font-bold">
                        <label for="">Username:</label>
                    </div>
                    <input class="w-full border-2 border-black h-10" type="text" placeholder="" name="txtboxUsername">
                    <div class="mx-auto">
                        <div class="mx-auto ">
                            <div class="mx-auto mt-10 font-bold">
                                <label for="">Password:</label>
                            </div>
                        <input class="w-full border-2 border-black h-10"  type="password" placeholder="" name="txtboxPassword">
                    </div>
                    <div class="flex">
                    <div class="mx-auto mt-16 border-black border-2 px-12 py-3 rounded-2xl bg-blue-700">
                        <div class="font-bold"><button> <input type="submit" value="Login" name="btnLogin"></button></div>
                    </div>
                </div>
                <div>
                <div class="flex">
                    <a class="mx-auto mt-16 border-black border-2 px-12 py-3 rounded-2xl bg-orange-600" href="http://localhost/streamlining/resources/html/register.php">Register</a>
                </div>
                </div>
            </div>
                
               

            </div>
            
      </div>
    </section>
    </form>
</body>
</html>