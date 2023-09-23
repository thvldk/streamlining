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
    <section>
        
    <div class="flex space-x-6 py-4 bg-gradient-to-r from-blue-500 to-orange-500">
            <div class="w-1/3 pl-6">
                <div class="flex">
                    <img src="resources/multimedia/images/Bicol_University.png" class="h-20" alt="">
                    <img src="resources/multimedia/images/bupc logo.png" class="h-20" alt="">
                    <div class="mt-3 font-bold ml-2 text-xl">
                        <label for="">Streamlining BU-Polangui Theses </label><br>
                        <label class=""for="">and Capstone Management</label>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex space-x-12 w-1/3 place-content-center font-bold mt-5 text-lg">
                <div><button> <a href="http://localhost/streamlining/index.php">Home</a> </button></div>
                <div><button> <a href="http://localhost/streamlining/resources/html/thesisindex.php">Thesis</a></button></div>
                <div><button> <a href="http://localhost/streamlining/resources/html/guide.php">Thesis Guide</a></button></div>
            </div>

            <div class="flex space-x-6 w-1/3 place-content-end pr-12 mt-5 text-lg">
                <div><button class="bg-blue-400 rounded-full w-20 h-10 font-bold" onclick="goToLogin()">Login<i class='fa fa-user-circle'></i></button></div>
                <div><button class="w-20 h-10 font-bold" onclick="goToRegister()">Register</button></div>
            </div>
        </div>

    </section>
    <!-- End Header -->
    <section>
        <div class="bg-[url('resources/multimedia/images/buplib.jpg')] mt-16 p-10 w-3/4 h-96 mx-auto bg-cover bg-center">

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
                        <input class="w-3/4 bg-white-500 mx-auto rounded-s-full p-5" type="text " placeholder="Enter keywords " onclick="goToSearch()"><div dir="rtl"> <i class="fa fa-search bg-blue-500 p-7 rounded-s-full cursor-pointer fa-lg"></i></div>
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
                    <button class="ml-40 underline underline-offset-1 font-bold text-3xl"><i class="fa fa-search mx-4"></i>Find</button>
                </div>
                <div class="w-1/2 ">
                    <a class="underline underline-offset-1 font-bold text-3xl" href="http://103.200.32.163/ilib/modules/opac/opac_home.php?q=li " target="_blank"><i class="fa fa-database mx-4"></i>BU iLib</a>
                </div>
            </div>
            <div class="w-1/4 "> </div>
        </div>
        <div class="flex space-x-6 w-full  h-12 mt-12">
            <div class="w-1/4 "> </div>
            <div class="w-1/2 flex mt-2">
                <div class="w-1/2 ">
                    <button class="ml-40 underline underline-offset-1 font-bold text-3xl"><i class="fa fa-bell mx-4"></i>Update</button>
                </div>
                <div class="w-1/2 ">
                    <a class="underline underline-offset-1 font-bold text-3xl" href="https://bicol-u.edu.ph/" target="_blank"><i class='fa fa-university mx-3'></i>Bicol University Website</a>
                </div>
            </div>
            <div class="w-1/4 "> </div>
        </div>
   
    </section>
</body>
</html>
<script>
    function goToLogin(){
        window.location = "http://localhost/streamlining/resources/html/login.php";
    }
    function goToRegister(){
        window.location = "http://localhost/streamlining/resources/html/register.php";
    }
    function goToSearch(){
        window.location = "http://localhost/streamlining/resources/html/booksearchHome.php";
    }
</script>