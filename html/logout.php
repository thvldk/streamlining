<?php 
include ("../php/logout.php") ;
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
</head>
<body>
    <!-- Start Header -->
    <form action="" method="POST">
    <section>
        
    <div class="flex space-x-6 py-4 bg-gradient-to-r from-blue-500 to-orange-500">
            <div class="w-1/3 pl-6">
                <div class="flex">
                    <img src="../multimedia/images/Bicol_University.png" class="h-20" alt="">
                    <img src="../multimedia/images/bupc logo.png" class="h-20" alt="">
                    <div class="mt-3 font-bold ml-2 text-xl">
                        <label for="">Streamlining BU-Polangui Theses </label><br>
                        <label class=""for="">and Capstone Management</label>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex space-x-12 w-1/3 place-content-center font-bold mt-5 text-lg">
                <div><button> <a href="http://localhost/streamlining/resources/html/logout.php">Home</a> </button></div>
                <div><button> <a href="http://localhost/streamlining/resources/html/thesis.php">Thesis</a></button></div>
                <div><button> <a href="http://localhost/streamlining/resources/html/news.php">Thesis Guide</a></button></div>
            </div>

            
            <div class="flex space-x-6 w-1/3 place-content-end pr-12 mt-5">
            <a href="http://localhost/streamlining/resources/html/search_history.php" class="button-link"><div>
                    <i class="fa fa-clock-o fa-lg mt-3"></i></div>
            </a>
            <a href="http://localhost/streamlining/resources/html/bookmark.html" class="button-link"><div>
                    <i class="fa fa-star fa-lg mt-3"></i></div>
            </a>
                <div><button class="bg-blue-500 rounded-full w-28 h-10 font-bold"> <input type="submit" value="Logout" name="btnLogout"> </button></div>
            </div>
        </div>

    </section>
    <!-- End Header -->
    <section>
        <div class="bg-[url('../multimedia/images/buplib.jpg')] mt-16 p-10 w-3/4 h-96 mx-auto bg-cover bg-center">

            <div class=" bg-black rounded-2xl opacity-60 w-3/4 mx-auto py-10 mt-16 ">
                <div>
                    <div class="ml-52 text-white">
                        SEARCH
                    </div>
                </div>
                
                   
                    <div class="w-full flex  " >
                        <div>
                            
                        </div>
                        <div class="w-1/4 " dir="ltr"> </div>
                        <input class="w-3/4 bg-white-500 mx-auto rounded-s-full p-5" type="text " placeholder="Enter keywords" onclick="goToSearch()"><div dir="rtl"> <i class="fa fa-search bg-blue-500 p-7 rounded-s-full" ></i></div>
                        <div class="w-1/4  "></div>
                    </div>
            </div>

        </div>

    </section>
    <section>
        <div class="flex space-x-6 w-full  h-12 mt-12">
            <div class="w-1/4 "> </div>
            <div class="w-1/2 flex mt-2">
                <div class="w-1/2 ">
                <a class="underline underline-offset-1 font-bold text-3xl" href="https://bicol-u.edu.ph/" target="_blank"><i class='fa fa-university'></i>Bicol University Website</a>
                </div>
                <div class="w-1/2 ">
                    <a class="underline underline-offset-1 font-bold text-3xl" href="http://103.200.32.163/ilib/modules/opac/opac_home.php?q=li " target="_blank"><i class="fa fa-database"></i>BU iLib</a>
                </div>
            </div>
   
    </section>
    </form>
</body>
</html>
<script>
    function goToSearch(){
        window.location = "http://localhost/streamlining/resources/html/booksearch.php";
    }
</script>