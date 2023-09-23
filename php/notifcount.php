<?php 
function notifCount(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    foreach($conn->query("SELECT COUNT(*) FROM users WHERE user_is_approved='No'") as $row) {

        @$_SESSION['user_is_approved'] =  $row['COUNT(*)'] ;
      echo "
      <a class='rounded-full text-white bg-red-600 relative right-4 bottom-4 '>&nbsp".$_SESSION['user_is_approved']."&nbsp</a>
      
      ";
}
}
?>