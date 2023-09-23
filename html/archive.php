<?php 
include ("../php/archive.php") ;
include ("../php/adminName.php") 
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
    <link rel="stylesheet" href="../css/modal.css">
    
</head>
<body class="overflow-y-hidden">
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
        <div class="bg-gray-300 h-screen ">
            <div class="flex">
            <?php include ("sidenav.php");?>
                <div class="mt-10 ml-6 text-lg flex w-full">
                    <label class="font-bold text-2xl ml-6" for="">Archive</label>
                    <div class="flex w-full">                                                         
                      <div class="container">
                        <span class="w-1/2 mx-auto border-black border-2 rounded-lg block flex"><i class="fa fa-search px-2 pt-1 cursor-pointer"></i> <select name="" id="selectFilter" class="py-1 bg-blue-300"> 
                            <option value="Title">Title</option>
                            <option value="Author">Author</option>
                            <option value="Course">Course</option>
                            <option value="Year">Year</option>
                        </select><input class="w-11/12 outline-none"  type="text" placeholder="Enter keywords " onkeyup="filterFunction()" id='searchBox'><svg class="cursor-pointer mt-1 ml-4" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-5 ">
            <div> <button onclick="printDiv('tabletoPrint')" class="absolute top-[136px] left-[450px]">  <i class="fa fa-print text-2xl mt-4 ml-28 bg-white w-10 text-center cursor-pointer" onclick="printDiv('tableToPrint')"></i>
             <!-- <div class="mt-4">
              <select id='cars' class='ml-10 h-9'>
               <?php yearFunction(); ?>
              </select>
              </div>  
              <div class="mt-4"><select id="cars" class="ml-10 h-9">
                <option value="volvo" >Course</option>
                <option value="volvo" >IT</option>
                <option value="volvo" >BM</option>
              </select></div>              -->
        </div>
        <div class="flex">
            <!-- <div class="mx-auto space-x-6 mt-4 bg-white px-4 py-2">
                <label class="cursor-pointer" for="">All</label>
                <label class="cursor-pointer" for="">A</label>
                <label class="cursor-pointer" for="">B</label>
                <label class="cursor-pointer" for="">C</label>
                <label class="cursor-pointer" for="">D</label>
                <label class="cursor-pointer" for="">E</label>
                <label class="cursor-pointer" for="">F</label>
                <label class="cursor-pointer" for="">G</label>
                <label class="cursor-pointer" for="">H</label>
                <label class="cursor-pointer" for="">I</label>
                <label class="cursor-pointer" for="">J</label>
                <label class="cursor-pointer" for="">K</label>
                <label class="cursor-pointer" for="">L</label>
                <label class="cursor-pointer" for="">M</label>
                <label class="cursor-pointer" for="">N</label>
                <label class="cursor-pointer" for="">O</label>
                <label class="cursor-pointer" for="">P</label>
                <label class="cursor-pointer" for="">Q</label>
                <label class="cursor-pointer" for="">R</label>
                <label class="cursor-pointer" for="">S</label>
                <label class="cursor-pointer" for="">T</label>
                <label class="cursor-pointer" for="">U</label>
                <label class="cursor-pointer" for="">V</label>
                <label class="cursor-pointer" for="">W</label>
                <label class="cursor-pointer" for="">X</label>
                <label class="cursor-pointer" for="">Y</label>
                <label class="cursor-pointer" for="">Z</label>
            </div> -->

            
            
        </div>
        
        <div id="tableToPrint" class="container mx-auto bg-white w-4/6 px-2 overflow-scroll absolute ml-[500px] top-[230px]"  style="height: 90vh; width: 140vh">
                <table id="tableList" class="table-auto mx-auto  w-full text-center ">
                    <thead class=" border-b border-black relative py-4">
                      <tr class="">
                    <th class="py-4">Year</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Course</th>
                    <th>Date Addded</th>
                  </tr>
                </thead>
                <tbody class="">
                    <?php tableList(); ?>
                </tbody>
              </table>
        </div>
     </div>
</section>
</body>
</html>
<script>
  function filterFunction() {
    var selectFilter = document.getElementById("selectFilter");
    var value = selectFilter.value;
    if(value == "Title"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableList");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }       
        }
    }else if(value == "Author"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableList");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }       
        }
    }else if(value == "Course"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableList");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[3];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }       
        }
    }else if(value == "Year"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableList");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }       
        }
    }
    
  }

  function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>
<script>
    function goToApproval(){
    window.location = 'http://localhost/streamlining/resources/html/approval.php';
}
</script>