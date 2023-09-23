<?php 
include ("../../db.php") ;

function visitorWidget(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $countVisitors = mysqli_query($conn,"SELECT * FROM logins");
    if ($countVisitors) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($countVisitors);
        
        // Display result
        printf($rowcount);
     }
}

function downloadWidget(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $countDownloads = mysqli_query($conn,"SELECT * FROM downloads");
    if ($countDownloads) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($countDownloads);
        
        // Display result
        printf($rowcount);
     }
}
function searchCountWidget(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $countSearches = mysqli_query($conn,"SELECT * FROM searches");
    if ($countSearches) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($countSearches);
        
        // Display result
        printf($rowcount);
     }
}
function userListWidget(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $userList = mysqli_query($conn,"SELECT * FROM users WHERE user_user_type ='Student'");
    while($row = mysqli_fetch_array($userList)){ 
        $_SESSION['user_student_number'] = $row['user_student_number'];
        $_SESSION['user_username'] = $row['user_username'];
        $_SESSION['user_course'] = $row['user_course'];
        echo "
        <tr>
            <td>".$_SESSION['user_student_number']."</td>
            <td>".$_SESSION['user_username']."</td>
            <td>".$_SESSION['user_course']."</td>
        </tr>
        ";
    }
}
function thesesWidget(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $thesesList = mysqli_query($conn,"SELECT * FROM records");
    while($row = mysqli_fetch_array($thesesList)){ 
        $_SESSION['record_title'] = $row['record_title'];
        $_SESSION['record_author'] = $row['record_author'];
        $_SESSION['record_pages'] = $row['record_pages'];
        $_SESSION['record_course'] = $row['record_course'];
        echo "
        <tr>
            <td>".$_SESSION['record_title']."</td>
            <td>".$_SESSION['record_author']."</td>
            <td>".$_SESSION['record_course']."</td>
            <td>".$_SESSION['record_pages']."</td>
        </tr>
        ";
    }
}

  



      

?>