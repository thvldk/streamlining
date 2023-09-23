<?php 
include ("../../db.php");

$getAdminQuery = mysqli_query($conn,"SELECT * FROM users WHERE user_id=1");
while($row = mysqli_fetch_array($getAdminQuery)){
    $_SESSION['user_username_admin'] = $row['user_username'];
    $_SESSION['user_password_admin'] = $row['user_password'];
    $_SESSION['user_firstname_admin'] = $row['user_firstname'];
    $_SESSION['user_lastname_admin'] = $row['user_lastname'];
}

?>