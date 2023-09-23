<?php 
include ("../../db.php") ;
function yearFunction(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $archiveYearList = mysqli_query($conn,"SELECT DISTINCT record_year FROM records ORDER BY record_year ASC");
    while($row = mysqli_fetch_array($archiveYearList)){ 
        $_SESSION['record_year'] = $row['record_year'];
        echo "
        <option value='".$_SESSION['record_year']."' >".$_SESSION['record_year']."</option>
        ";
    }
}
function tableList(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $archiveTableList = mysqli_query($conn,"SELECT * FROM records ORDER BY record_year ASC");
    while($row = mysqli_fetch_array($archiveTableList)){ 
        $_SESSION['record_control_number'] = $row['record_control_number'];
        $_SESSION['record_accession_number'] = $row['record_accession_number'];
        $_SESSION['record_title'] = $row['record_title'];
        $_SESSION['record_author'] = $row['record_author'];
        $_SESSION['record_pages'] = $row['record_pages'];
        $_SESSION['record_course'] = $row['record_course'];
        $_SESSION['record_year'] = $row['record_year'];
        $_SESSION['record_date_added'] = $row['record_date_added'];
        echo "
            <tr class='border-t border-b border-black'>
            <td class='py-4'>".$_SESSION['record_year']."</td>
            <td class=''>".$_SESSION['record_title']."</td>
            <td class=''>".$_SESSION['record_author']."</td>
            <td class=''>".$_SESSION['record_course']."</td>
            <td class=''>".$_SESSION['record_date_added']."</td>
            </tr>
            ";
    }
}
?>