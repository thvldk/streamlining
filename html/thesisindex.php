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
        <div class=" bg-gray-500 mx-auto  py-10  ">
            <div class="ml-60">
            
            </div>
            <div>
                
            </div>
               
                <div class="w-full flex" >
                    <div class="w-1/4 " dir="ltr"> </div>
                    <div class="W-1/2 font-bold" dir="ltr" >
                        <select id="cars" class="py-8 rounded-s-full bg-blue-300">
                            <option value="volvo">Browse by</option>
                            <option value="saab">Course</option>
                            <option value="opel">Year</option>
                          </select>
                    </div>
                    <input class="w-1/2 mx-auto  p-3" type="text " placeholder="Enter keywords" onclick="goToSearch()"><div dir="rtl"> <i class="fa fa-search bg-blue-600 p-8 rounded-s-full fa-lg"></i></div>
                    <div class="w-1/4  "></div>
                </div>
    </section>
    <section class="bg-gray-200 pb-20">
        <div class="flex">
            <div class="flex mt-20 w-screen">
                <div class="mx-auto flex space-x-36 ">
                    <div class="bg-white w-128 h-128">
                        <div class="mt-9 ml-9 text-2xl">
                            <p class=" font-bold text-4xl">Welcome to Book Search </p><br>

                         
                            BU-Polangui Theses and Capstone Management <br>
                            Search enables you to find theses and capstone <br>
                            projects available in the BU-Polangui Library. <br>
                        </p>
                        </div>
                       
                        <br>
                        <br>
                        <div class="ml-8 text-2xl">
                            Sign In to My Library Account to:
                        <ul class="list-disc ml-10">
                            <li>Save results in My Favorites</li>
                            <li>Obtain additional article results</li>
                            <li>Save searches and set alerts for new results</li>
                        </ul>
                        </div>
                        </div>
                    <div class="bg-white w-128 h-128">
                        <div class="mt-9 ml-9 text-2xl">
                            <p class="font-bold text-4xl">
                                Search Tips </p><br>
                            
                            In a basic search you'll receive results that <br> 
                            contain all of your search terms. These may <br> 
                            match keywords in a little, author names, <br>
                            subjects, abstract, or other descriptions. <br>
                            Use the Advanced Search instead to pre-limit <br>
                            to search only in specific fields, material types, and publication dates. <br>
                            Use the Filter to limit to items available online <br>
                            or physically available in library. You can also <br>
                            include or exclude particular material types, dates, authors, subjects or library locations.
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
</body>
</html>
<script>
    function goToSearch(){
        window.location = "http://localhost/streamlining/resources/html/booksearchHome.php";
    }
    function goToLogin(){
        window.location = "http://localhost/streamlining/resources/html/login.php";
    }
    function goToRegister(){
        window.location = "http://localhost/streamlining/resources/html/register.php";
    }
</script>