<?php 
include ("../../db.php") ;
$_SESSION['y'] = 1;

function functionGetTableData(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    $y = 1;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $getRecordTableData = "SELECT * FROM records";
    $showRecordTableData = mysqli_query($conn,$getRecordTableData);
    while($row = mysqli_fetch_array($showRecordTableData)){ 
        $_SESSION['record_control_number'] = $row['record_control_number'];
        $_SESSION['record_accession_number'] = $row['record_accession_number'];
        $_SESSION['record_title'] = $row['record_title'];
        $_SESSION['record_author'] = $row['record_author'];
        $_SESSION['record_pages'] = $row['record_pages'];
        $_SESSION['record_course'] = $row['record_course'];
        $_SESSION['record_year'] = $row['record_year'];
        $_SESSION['record_availability'] = $row['record_availability'];
        $_SESSION['record_date_added'] = $row['record_date_added'];
        $_SESSION['record_book_cover'] = $row['record_book_cover'];
        $_SESSION['record_file_upload'] = $row['record_file_upload'];
        echo "
        <li>
            <div class='ml-5 flex mb-10'>
            
            <a for=''>".$y++."</a>
            
          <a><img class='w-20 h-20' src='". $_SESSION['record_book_cover']."' alt=''><a/>
            <div >
            <a href='#' class='text-sm ml-6' for=''>CAPSTONE PROJECT</a> <br>
            <a class='ml-6 font-bold text-blue-500 hover:cursor-pointer' id='myBtn".$y."' title='myBtn".$y."' name='$y' >".$_SESSION['record_title']."</a><br>
          
             <a class='ml-6 text-xs'>".$_SESSION['record_course']." </a>
             <a class='ml-6 text-xs'> ".$_SESSION['record_year']." </a><br>
            <a class='ml-6 text-xs'>".$_SESSION['record_author']." </a>
            <br>
            <a class='ml-6 text-xs'>  Availability: ".$_SESSION['record_availability']." </a>
           
            </div>

            </div>
            
            
            </li>
            
        ";
    $record_title = $_SESSION['record_title'];
    $showModalData = mysqli_query($conn,"SELECT * FROM records WHERE record_title='$record_title'");
    while($row = mysqli_fetch_array($showModalData)){ 
        
        echo "
        <div id='myModal' class='modal'>
        <div class='modal-content'>
            <div class='modal-header'>
            <span class='close'>&times;</span>
            <h2 class='text-2xl py-2 self-start'>". $row['record_title']."</h2>
            </div>
            <div class='modal-body flex'>
                <div class='container w-1/5'>
                    <img class=' w-28 h-28' src='". $row['record_book_cover']."' alt='' id='recordCover'>
                </div>
                <div class='container w-4/5 mr-10'>
                    <label class='text-sm' for='' >THESIS</label> <br>
                    <label class='font-bold text-blue-500' for='' id='recordTitle'>Title</label>
                    <span class='float-right'>
                    <i id='bookmark' onclick='bookmarkFunction()' class='fa fa-star fa-lg mt-3 hover:cursor-pointer'></i>
                    </span>
                    <p class='text-xs' id='txtSchoolCourseYear'>BU-Polangui BSCS C11a 2019 <br></p>
                    <p class='text-xs' id='txtAuthors'>Cadenas, R M, Contado, J A, Teodoro, A.D. <br></p>
                    <label class='text-xs'> Availability:</label>
                    <p class='text-xs text-lime-400' id='txtAvailability'>asdasd </p>
                    <br>
                    <span class='whitespace-nowrap'>
                        <label class='' for=''>Details</label> 
                       <hr class='h-1 mx-auto my-4 bg-gray-100 border-0 rounded dark:bg-gray-700'>
                    </span>
                    <div class='flex flex-col text-sm'>
                        <label for='' id='lblTitle'>title</label>
                        <label for='' id='lblAuthor'>Author/s</label>
                        <label for='' id='lblCourse'>Course</label>
                        <label for='' id='lblYear'>Year</label>
                        <label for='' id='lblContent'>Content</label><form method='post'>
                        <a href='#'  value='' name='dlName' id='dlName'Download> Download PDF </a>
                        </form>
                    </div>
                    
                    <br><hr class='h-1 mx-auto my-4 bg-gray-100 border-0 rounded dark:bg-gray-700'>

                    <div class='flex'>
                        <div class='mx-auto'>
                            <iframe class='mb-4' id='recordFile'
                            src='".$row['record_file_upload']."'
                            width='400px'
                            height='400px'
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    ";
    }
    $showModalData = mysqli_query($conn,"SELECT * FROM records WHERE record_title='$record_title'");
    while($row = mysqli_fetch_array($showModalData)){ 
        echo "
    <script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('myBtn".$y."');
        var span = document.getElementsByClassName('close')[0];
        btn.onclick = function() {
        modal.style.display = 'block';

        document.getElementById('recordTitle').innerHTML = '".$row['record_title']."'
        document.getElementById('recordCover').src = '".$row['record_book_cover']."'
        document.getElementById('recordFile').src = '".$row['record_file_upload']."'
        document.getElementById('txtSchoolCourseYear').innerHTML = 'BU-Polangui ".$row['record_course']." ".$row['record_year']."'
        document.getElementById('txtAuthors').innerHTML = '".$row['record_author']."'
        document.getElementById('txtAvailability').innerHTML = '".$row['record_availability']."'
        document.getElementById('lblTitle').innerHTML = '".$row['record_title']."'
        document.getElementById('lblAuthor').innerHTML = '".$row['record_author']."'
        document.getElementById('lblCourse').innerHTML = '".$row['record_course']."'
        document.getElementById('lblYear').innerHTML = '".$row['record_year']."'
        document.getElementById('dlName').href = '".$_SESSION['record_file_upload'] ."'
        console.log('click');
        console.log('".$row['record_title']."');
        }
        span.onclick = function() {
        modal.style.display = 'none';
        }
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
        }
    </script>
    ";

    }
    
    }
    
   
}


function addDownloadCount(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $downloadCount = mysqli_query($conn,"INSERT INTO downloads(download_date_time) VALUES (now())");
    }
   


function addSearchCount(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stream_lining";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $searchCount = mysqli_query($conn,"INSERT INTO searches(search_date_time) VALUES (now())");
}
?>
