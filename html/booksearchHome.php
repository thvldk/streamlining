<?php
include ("../php/booksearchHome.php");
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
    <link rel="stylesheet" href="../css/modal.css">
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
                    <div class="W-1/2" dir="ltr" >
                        <select id="searchFilter" class="py-7 rounded-s-full bg-blue-300">
                            <option value="Title" >Title</option>
                            <option value="Year" >Year</option>
                            <option value="Authors" >Author</option>
                          </select>
                          
                    </div>
                    
                    <input class="w-1/2 mx-auto  p-5" type="text" placeholder="Enter keywords" id="searchBox" name="searchBox" onkeyup="filterFunction()"><div dir="rtl"> <button><i class="fa fa-search bg-blue-600 p-7 rounded-s-full" onclick=""></i></button></div>
                    <div class="w-1/4  "></div>
                </div>
                </div>
               
    </section>
    <section class="bg-gray-200 relative  w-full flex">
        <div class="w-1/4">

        </div>
        <div class="w-3/4">
            
            <div class="w-full h-16 bg-white" >
                <div class="py-5 mx-5">
                       <label id="totalOutput" ></label>
                       
                </div>
            
            </div>
            
            <div class="w-full h-90 mt-8 bg-white" >
            <ul id='tableList'>
                <?php functionGetTableData(); ?>
            </ul>
            </div>
            <!-- <button class="mt-4 ml-6 font-bold bg-blue-500 w-26 text-center py-1" id="myBtn">+ Add New</button> -->
          
    

             </div>
        
        <div class="w-1/4">
            
        </div>
      
       
        
    </section>
</body>
</html>

<script>
 


 function filterFunction(){
    var selectFilter = document.getElementById('searchFilter');
    var value = selectFilter.value;
    if (value == "Title"){
        var input, filter, ul, li, a, i, txtValue,count = 0, countMissing = 0;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        ul = document.getElementById("tableList");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[5];
            if (a) {
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
                count++;
                } else {
                li[i].style.display = "none";
                countMissing++;
                }
            } 
            var allItemsTotal = count + countMissing;
            document.getElementById('totalOutput').innerHTML
                = "Searched "  + count + " out of "+ allItemsTotal;
            }  
    }else if (value == "Year"){
        var input, filter, ul, li, a, i, txtValue,count = 0, countMissing = 0;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        ul = document.getElementById("tableList");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[7];
            if (a) {
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
                count++;
                } else {
                li[i].style.display = "none";
                countMissing++;
                }
            } 
            var allItemsTotal = count + countMissing;
            document.getElementById('totalOutput').innerHTML
                = "Searched "  + count + " out of "+ allItemsTotal;
            } 
    }else if (value == "Authors"){
        var input, filter, ul, li, a, i, txtValue,count = 0, countMissing = 0;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        ul = document.getElementById("tableList");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[8];
            if (a) {
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
                count++;
                } else {
                li[i].style.display = "none";
                countMissing++;
                }
            } 
            var allItemsTotal = count + countMissing;
            document.getElementById('totalOutput').innerHTML
                = "Searched "  + count + " out of "+ allItemsTotal;
            } 
    }
      
            
        }

</script>
<script>
  function myFunction() {
    <?php addDownloadCount(); ?>;
}
</script>
<script>
    function goToHome(){
        w window.location = "http://localhost/streamlining/resources/html/logout.php";
    }
    function bookmarkFunction(){
        document.getElementById('bookmark').style.color = 'yellow'
    }
    function goToLogin(){
        window.location = "http://localhost/streamlining/resources/html/login.php";
    }
    function goToRegister(){
        window.location = "http://localhost/streamlining/resources/html/register.php";
    }
</script>