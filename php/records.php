<?php 
include ("../../db.php") ;
@$txtboxControlNumber = $_POST['txtboxControlNumber'];
@$txtboxAccessionNumber = $_POST['txtboxAccessionNumber'];
@$txtboxTitle = $_POST['txtboxTitle'];
@$txtboxAuthor = $_POST['txtboxAuthor'];
@$txtboxPages = $_POST['txtboxPages'];
@$txtboxCourse = $_POST['txtboxCourse'];
@$txtboxYear = $_POST['txtboxYear'];
@$txtboxAvailability = $_POST['txtboxAvailability'];
@$dateAdded = 'now()';
$target_dirs = "../multimedia/uploaded/";
@$myBookCover = $target_dirs.basename($_FILES["uploadBookCover"]["name"]);
@$myFile = $target_dirs.basename($_FILES["myFile"]["name"]);
$imageFileType = strtolower(pathinfo($myBookCover,PATHINFO_EXTENSION));
if(isset($_POST['btnSave'])){
    if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $myFile)) {
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }else{
            if (move_uploaded_file($_FILES["uploadBookCover"]["tmp_name"], $myBookCover)) {
                $insertRecords = "INSERT INTO records(record_control_number, record_accession_number, record_title, record_author, record_pages, record_course, record_year, record_availability, record_date_added, record_book_cover, record_file_upload) VALUES ('$txtboxControlNumber','$txtboxAccessionNumber','$txtboxTitle','$txtboxAuthor','$txtboxPages','$txtboxCourse','$txtboxYear','$txtboxAvailability',$dateAdded,'$myBookCover', '$myFile')" ;  
                $queryInsertRecords = mysqli_query($conn,$insertRecords);
              }
        }
    }
    
}
function functionGetTableData(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";

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
        echo "
        <tr class='border-t border-b border-black'>
        <td class='py-5'><img src='".$_SESSION['record_book_cover']."' alt='' class='w-20 h-20'></td>
        <td>".$_SESSION['record_control_number']."</td>
        <td>".$_SESSION['record_accession_number']."</td>
        <td>". $_SESSION['record_title']."</td>
        <td>".$_SESSION['record_author']."</td>
        <td>".$_SESSION['record_pages']."</td>
        <td>".$_SESSION['record_course']."</td>
        <td>".$_SESSION['record_year']."</td>
        <td>".$_SESSION['record_availability']."</td>
        </tr>
        ";
    }
}

?>