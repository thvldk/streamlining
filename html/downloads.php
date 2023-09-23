<?php 
include ("../php/downloads.php") ;
?>
<!DOCTYPE html>
<html lang="en" class="overflow-y-hidden">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <script src="../js/tailwindConfig.js"></script>
    <link rel="stylesheet" href="../css/modal.css">
    
</head>
<body class="overflow-y-hidden">
    <section>
        
      <div class="flex space-x-6 py-8 bg-gradient-to-r from-cyan-500 to-blue-500">
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
            <div><button><i class="fa fa-bell text-3xl "></i></button></div>
            <div>
                <label class="font-bold" for="">Ronabeth Loquinario-Fider</label><br>
                <label class="ml-32 font-bold" for="">Librarian</label>
            </div>
            <div>
                <img class="rounded-full h-14 w-14" src="../multimedia/images/library.png" alt="">
            </div>
        </div>
    </div>
        <div class="bg-gray-300 h-screen ">
            <div class="flex">
                <div class="space-y-2 mt-10 ml-10">
                    <div class="w-10 h-1.5 bg-gray-600"></div>
                    <div class="w-10 h-1.5 bg-gray-600"></div>
                    <div class="w-10 h-1.5 bg-gray-600"></div>
                  </div> 
                <div class="mt-10 ml-6 text-lg flex w-3/4">
                    <label class="font-bold text-2xl" for="">Downloads</label>
                    
                </div>
            </div>
            <div class="flex mt-10 ">
            <div> </div>       
        </div>
        <div class="flex">
            <div class="">               
            </div>
        </div>       
       <div class='space-y-0 max-h-128 overflow-y-scroll'>
        <form action="" method="POST">
        <i class='ml-5 fa fa-download text-black'></i>
        <?php
        functionGetDownloadsTableData();
        ?>
        </form>
       
        
                <!-- MAIN DIV -->
<!-- <div class="space-y-0 max-h-128 overflow-y-auto">
    <div class="flex flex-col w-10/12 mx-auto">
        <div class="flex bg-white h-36 border-black border-b-2">
        <div class="flex w-1/12 ">
        <div class="mx-auto my-auto">
        <label for="">1</label>
        </div>
        </div>

        <div class="flex flex-col w-4/5">
        <div class="my-auto">
        <div class="">
        <label for="" class="text-sm">CAPSTONE PROJECT</label>
        </div>
        <div class="">
        <label for="" class="text-xl text-blue-500">This is the title of the Thesis</label>
        </div>
        <div class="-space-y-2">
        <div class="space-y-16">
        <label for="" class="text-xs">Bsit-Graduates 2023</label>
        </div>
        <div class="">
        <label for="" class="text-xs">author of the book</label>
        </div>
        </div>
        </div>
        </div>  

    <div class="flex flex-1">
        <div class="mx-auto my-auto">
            <div class="">
                <label for="" class="text-sm">Number of Downloads</label>
            </div>
        <br>
        <div class="text-center">
            <label for="" class="text-xl text-blue-500">5473 <i class="ml-5 fa fa-download text-black"></i></label>
        </div>
         </div>
    </div>
    </div>
</div> -->
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
              </div>
        </div>
</section>
</body>
</html>

<script>
  function myFunction() {
    <?php addDownloadCount(); ?>;
}
</script>

                