<?php 
include ("../../db.php") ;

function functionGetDownloadsTableData(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    $i = 1;
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
        <div class='flex flex-col w-10/12 mx-auto'>
        <div class='flex bg-white h-36 border-black border-b-2'>
        <div class='flex w-1/12'>
        <div class='mx-auto my-auto'>
        <label for=''>".$i++."</label>
        </div>
        </div>

        <div class='flex flex-col w-4/5'>
        <div class='my-auto'>
        <div class=''>
        <label for='' class='text-sm'>CAPSTONE PROJECT</label>
        </div>
        <div class=''>
        <label for='' class='text-xl text-blue-500'>".$_SESSION['record_title']."</label>
        </div>
        <div class='-space-y-2'>
        <div class='space-y-16'>
        <label for='' class='text-xs'>".$_SESSION['record_course']." ".$_SESSION['record_year']."</label>
        </div>
        <div class=''>
        <label for='' class='text-xs'>".$_SESSION['record_author']."</label>
        </div>
        </div>
        </div>
        </div>  

        <div class='flex flex-1'>
        <div class='mx-auto my-auto'>
            <div class=''>
                <label for='' class='text-sm'>Number of Downloads</label>
            </div>
        <br>
        <div class='text-center'>
            <label for='' class='text-xl text-blue-500'>5473 <a href='".$_SESSION['record_file_upload']."' name='linkDownload' download onclick='myFunction()'><i class='ml-5 fa fa-download text-black'></i></a></label>
        </div>
         </div>
    </div>
    </div>
</div>
        ";
    }
echo "
    
";
    
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
?>