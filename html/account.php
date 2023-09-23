<?php 
include ("../php/account.php");
include ("../php/adminName.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/tailwindConfig.js"></script>
</head>
<body >
    <section>
        
    <div class="flex space-x-6 py-4 bg-gradient-to-r from-blue-500 to-orange-500">
            <div class="w-1/2 pl-6">
                <div class="flex">
                    <img src="../multimedia/images/Bicol_University.png" class="h-20" alt="">
                    <img src="../multimedia/images/bupc logo.png" class="h-20" alt="">
                    <div class="mt-3 font-bold ml-2 text-xl">
                        <label for="">Streamlining BU-Polangui Theses </label><br>
                        <label class=""for="">and Capstone Management</label>
                    </div>
                </div>
            </div>

            <div class="flex space-x-6 w-1/2 place-content-end pr-12 mt-5">
                <div><button onclick="goToApproval()"><i class="fa fa-bell text-3xl "></i><?php include ("../php/notifcount.php"); notifCount(); ?></button></div>
                <div>
                <a href="http://localhost/streamlining/resources/html/account.php" class="font-bold" for=""><?=$_SESSION['user_firstname_admin']?> <?=$_SESSION['user_lastname_admin']?></a><br>
                    <label class="ml-32 font-bold" for="">Librarian</label>
                </div>
                <div>
                    <img class="rounded-full h-14 w-14" src="../multimedia/images/library.png" alt="">
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="flex">
        <?php include ("sidenav.php");?>    
        </div>
            <div class="w-3/4 bg-gray-300 absolute top-36 left-[490px]">
                <div class="flex ">
                    <div class="mx-auto bg-white w-5/6 rounded-lg mt-10 mb-4">
                        <div class="py-5 px-8 font-bold text-2xl">
                            <label for="">Account Settings</label>
                        </div>
                        <div class="flex flex-col">
                            <div class="mx-auto mt-6">
                                <img class="h-36 rounded-full w-36 ml-4" src="../multimedia/images/lib1.jpg" alt=""> <br>
                                <label class="ml-6 font-bold" for="">MADAM RONA</label> <br>
                                <label class="ml-12 font-bold" for="">Librarian</label>
                            </div>  
                            <form action="" method="POST">
                            <div class="flex pb-20">
                                <div class="mx-auto">
                                    <div class="mt-5 mr-10">
                                        <div class="flex flex-col">
                                            <div class="flex mt-10 ">
                                                <label class="mr-10 font-bold" for="">First Name:</label>
                                                <input class="rounded-lg border-2 border-black w-96" type="text" name="adminFirstname" value="<?=$_SESSION['user_firstname']?>">
                                            </div>
                                            <div class="flex mt-10 ">
                                                <label class="mr-9 font-bold" for="">Last Name:</label>
                                                <input class="rounded-lg border-2 border-black w-96" type="text" name="adminLastname" value="<?=$_SESSION['user_lastname']?>">
                                            </div> 
                                            <div class="flex mt-10">
                                                <label class="mr-2 font-bold" for="">Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                                <input class=" rounded-lg border-2 border-black w-96" type="text" name="adminUsername"value="<?=$_SESSION['user_username']?>">
                                            </div> 
                                            <div class="flex mt-10">
                                                <label class="mr-3 font-bold" for="">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                                <input class="rounded-lg border-2 border-black w-96" type="password" name="adminPassword"value="<?=$_SESSION['user_password']?>">
                                            </div> 
                                            <div class="self-end mt-10 bg-blue-500 rounded-lg w-28 h-10 border border-black text-white">
                                                <button type="submit" class="mt-1 ml-2 font-bold" name="btnEditAccount">Edit Account</button>
                                            </div>
                                        </div>
                                            
                                    </div>
                                    
                                    
                            </div>
                            </form>
                            </div>                     
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

            
        
        
    </section>

    
</body>
</html>
<script>
    function goToApproval(){
    window.location = 'http://localhost/streamlining/resources/html/approval.php';
}
</script>