<?php
include ("../php/records.php");
include ("../php/adminName.php");
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
                 
                    <label class="font-bold text-2xl ml-6" for="">Records</label>
                    <div class="flex w-full">                                                         
                      <div class="container">
                        
                        <span class="w-1/2 mx-auto border-black border-2 rounded-lg block flex"><i class="fa fa-search px-2 pt-1 cursor-pointer"></i>
                        <select name="" id="selectFilter" class="py-1 bg-blue-300"> 
                            <option value="Title">Title</option>
                            <option value="Author">Author</option>
                            <option value="Course">Course</option>
                            <option value="Year">Year</option>
                            <option value="Availability">Availability</option>
                        </select><input class="w-11/12 outline-none" onkeyup="filterFunction()" id="searchBox"  type="text" placeholder="Enter keywords "><svg class="cursor-pointer mt-1 ml-4" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></span>
                      </div>
                    </div>
                </div>
                <div class="flex mt-5 absolute ml-[500px] ">
                
            <div>
            </div>
           
                        <!-- Trigger/Open The Modal -->
                        <i class="fa fa-print text-2xl mt-4 ml-28 bg-white w-10 text-center cursor-pointer" onclick="printDiv('tableToPrint')"></i>
    <button class="mt-4 ml-6 font-bold bg-white w-24 text-center py-1" id="myBtn">+ Add New</button>
    <form action="" method="POST" enctype="multipart/form-data">
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
            <span class="close">&times;</span>
            <h2 class="text-2xl py-2 self-start">Add New</h2>
            </div>
            <div class="modal-body">
                <div class=" mx-auto">
                    
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Control <br> Number</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxControlNumber"></div>
                    </div>
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Accession <br> Number</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxAccessionNumber"></div>
                    </div>
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Title</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxTitle"></div>
                    </div>
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Author</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxAuthor"></div>
                    </div>
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Pages</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxPages"></div>
                    </div>
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Course</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxCourse"></div>
                    </div>
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Year</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxYear"></div>
                    </div> 
                    <div class="w-full flex h-14">
                        <div class="w-3/12  "><label class="" for="">Availability</label></div>
                        <div class="w-9/12  "><input class="rounded-lg border-2 border-black w-full h-7 " type="text" name="txtboxAvailability"></div>
                    </div>
                        <div class="w-full flex h-8">
                            <div class="w-3/12 my-auto  "><label class="" for="">Book Cover</label></div>
                                <input type="file" id="myfile" name="uploadBookCover" required><br><br>                         
                        </div>
                        <div class="w-full flex h-8">
                            <div class="w-3/12 my-auto  "><label class="" for="">File Upload</label>
                            </div>                            
                                <input type="file" id="myfile" name="myFile" required><br><br>                                                   
                        </div>
                </div>                                                                  
            </div>
            <div class="modal-footer mt-6 py-3 flex">
                <div class="self-end">
                    <button class="border border-black bg-gray-400 w-16 rounded-lg">Cancel</button>
                    <button class="border border-black bg-blue-500 w-32 rounded-lg"  name="btnSave">Save Changes</button>
                </div>
               
            
            </div>
        </div>
    </div>
    </form>
</body>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
                    
                </div>
                
            </div>
            <br>
            <div id="tableToPrint" class="container mx-auto bg-white w-4/6 px-2 overflow-scroll absolute ml-[500px] top-[230px]"  style="height: 90vh; width: 140vh" >
                <table id="tableList" class="table-auto mx-auto  w-full text-center ">
                    <thead class=" border-b border-black relative py-4">
                      <tr class="">
                        <th class="py-4"></th>
                        <th>Control number</th>
                        <th>Accession number</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Pages</th>
                        <th>Course</th>
                        <th>Year</th>
                        <th>Availability</th>
                      </tr>
                    </thead>
                    <tbody class="" >
                        <?php functionGetTableData(); ?>
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
    }else if(value == "Author"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableList");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[4];
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
            td = tr[i].getElementsByTagName("td")[6];
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
            td = tr[i].getElementsByTagName("td")[7];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }       
        }
    }else if(value == "Availability"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchBox");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableList");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[8];
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