<?php 
include ("../php/register.php");
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
    <section class="flex">
        <div class="bg-[url('../multimedia/images/library.png')] w-1/2 h-screen bg-cover bg-center">
            
            
        </div>

        <div class=" w-1/2 h-screen ">
            <div class="flex bg-blue-500 w-1/2 mx-auto h-3/4 mt-28 rounded-3xl">
               
                <div class="mx-auto my-auto">
                    <div class="text-center mb-10 text-2xl font-bold">
                        <label for="" class="">SIGN UP</label>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="flex font-bold">
                        <label for="">Firstname:</label>
                        <label class="mx-auto" for="">Lastname:</label>
                    </div>
                    <div>
                        <input class="border-2 border-black h-10" type="text" name="txtboxFirstname">
                        <input class="border-2 border-black h-10" type="text" name="txtboxLastname">
                    </div>
                    <div class="mt-5">
                        <div><label class="font-bold" for="">Username:</label></div>
                        <input class="w-full border-2 border-black h-10" type="text" name="txtboxUsername">
                    </div>
                    <div class="mt-5 ">
                        <div><label class="font-bold" for="">Student Number:</label></div>
                        <input class="w-full border-2 border-black h-10" type="text" name="txtboxStudentNumber">
                    </div>
                    <div class="font-bold"><br><label class="" for="">Course</label></div>
                    <input class="border-2 border-black h-10" type="text" name="txtboxCourse">
                    <div class="w-3/12 my-auto"><br><label class="" for="">ID picture</label></div>
                                <input type="file" id="myfile" name="myFile" required>
                    <div class="mt-5 ">
                        <div><label class="font-bold" for="">Password:</label></div>
                        <input class="w-full border-2 border-black h-10" type="password" name="txtboxPassword">
                    </div>
                    <div class="mt-5 ">
                        <div><label class="font-bold" for="">Confirm Password:</label></div>
                        <input class="w-full border-2 border-black h-10" type="password" name="txtboxConfirmPassword">
                    </div>
                    <div class="flex font-bold">
                        <div class="mx-auto mt-16 border-2 px-12 py-3 rounded-2xl border-black bg-blue-700">
                            <div><button><input type="submit" name="btnRegister" value="Register" ></button></div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>    

                
        
    </section>
</body>
</html>

