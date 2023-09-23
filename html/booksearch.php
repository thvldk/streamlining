<?php
include ("../php/booksearch.php");
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
                            <option value="Authors" >Authors</option>
                          </select>
                          
                    </div>
                    
                    <input class="w-1/2 mx-auto  p-3" type="text" placeholder="Enter keywords" id="searchBox" name="searchBox" onkeyup="filterFunction()"><div dir="rtl"> <button><i class="fa fa-search bg-blue-600 p-7 rounded-s-full" ></i></button></div>
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
        <div class="w-1/4"></div>
    </section>
</body>
</html>

<script>
  var selectFilter = document.getElementById('searchFilter');
    var value = selectFilter.value;
    if (value == "Title"){
        console.log("Title")
    } else if (value == "Year")
    {
        console.log("Year")
    }else if(value =="Authors")
    {
        console.log("Hello")
    }


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
  function countMyDL() {
    <?php addDownloadCount(); ?>;
    console.log("countMyDLLog")
}
    
</script>
<script>
    function goToHome(){
        window.location = "http://localhost/streamlining/resources/html/logout.php";
    }
    
    function goToThesis(){
        window.location = "http://localhost/streamlining/resources/html/thesis.php";
    }
    function logout(){
        window.location = "http://localhost/streamlining/resources/html/login.php";
    }
    function bookmarkFunction(){
        document.getElementById('bookmark').style.color = 'yellow'
    }
</script>

<script>

var dlNameBtn = document.getElementById('dlName');


dlNameBtn.onclick = function() {
    <?php $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $downloadCount = mysqli_query($conn,"INSERT INTO downloads(download_date_time) VALUES (now())");?>
    console.log("dlName is clicked")
}
</script>
