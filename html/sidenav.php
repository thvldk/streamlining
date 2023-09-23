<?php include("../php/adminName.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="bg-white w-1/4">
                <div class="flex flex-col">
                    <div class="flex">
                    <div class="mx-auto py-3 mt-6 font-bold">
                            <label for="" class="">ADMIN</label>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <img class="w-20 ml-12" src="../multimedia/images/bupc logo.png" alt=""> 
                            <div class="mt-4 ml-4 text-left">
                            <label class="font-bold text-lg" for="">Ma'am <?= $_SESSION['user_firstname_admin']?></label><br>
                            <label class="font-bold text-sm" for="">Librarian</label>
                            </div>
                      </div> 
                     
                      </div>
                      
                    <div class="flex border-black border-y-2 mt-10">
                      
                        <div class="mx-auto w-1/2 py-10 flex space-x-6">
                            <img class="w-8 h-8" src="../multimedia/icon/drive-download-20230904T101628Z-001/dashboard1.png" alt="">
                            <a for="http://localhost/streamlining/resources/html/admin1.php" class="font-bold cursor-pointer" onclick="goToDashboard()">Dashboard</a>
                        </div>
                    </div>
                    <div class="flex border-black border-b-2">
                        <div class="mx-auto py-10 w-1/2 flex space-x-6">
                            <img class="w-8 h-8" src="../multimedia/icon/drive-download-20230904T101628Z-001/records1.png" alt="">
                            <a for="" class="font-bold cursor-pointer" href="http://localhost/streamlining/resources/html/records.php">Records</a>
                        </div>
                    </div>
                    <div class="flex border-black border-b-2">
                        <div class="mx-auto py-10 w-1/2 flex space-x-6">
                            <img class="w-8 h-8" src="../multimedia/icon/drive-download-20230904T101628Z-001/archives1.png" alt="">
                            <a for="" class="font-bold cursor-pointer" onclick="goToArchive()">Archives</a>
                        </div>
                    </div>
                    <div class="flex border-black border-b-2">
                        <div class="mx-auto py-10 w-1/2 flex space-x-6">
                            <img class="w-8 h-8" src="../multimedia/icon/drive-download-20230904T101628Z-001/logout.png" alt="">
                            <a for="" class="font-bold cursor-pointer " onclick="logout()" >Log out</a>
                        </div>
                    </div>
                    
               </div>
        </div>
</body>
</html>

<script>
    function goToDashboard(){
        window.location = 'http://localhost/streamlining/resources/html/admin1.php';
    }
    function goToArchive(){
        window.location = 'http://localhost/streamlining/resources/html/archive.php';
    }
    function logout(){
        window.location = 'http://localhost/streamlining/resources/html/login.php';
    }
   
</script>