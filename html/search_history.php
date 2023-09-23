<?php
include ("../php/search_history.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/tailwindConfig.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <!-- Start Header -->
    
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
                <div><button class="bg-blue-500 rounded-full w-28 h-10 font-bold" onclick="logout()">Logout</button></div>
            </div>
        </div>


    </section>
    <!-- End Header -->
    <section>

    </section>
</body>
</html>