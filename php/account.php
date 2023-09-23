<?php 
include ("../../db.php");

$getAdminQuery = mysqli_query($conn,"SELECT * FROM users WHERE user_id=1");
while($row = mysqli_fetch_array($getAdminQuery)){
    $_SESSION['user_username'] = $row['user_username'];
    $_SESSION['user_password'] = $row['user_password'];
    $_SESSION['user_firstname'] = $row['user_firstname'];
    $_SESSION['user_lastname'] = $row['user_lastname'];
}


if(isset($_POST['btnEditAccount'])){
    $adminFirstname = $_POST['adminFirstname'];
    $adminLastname = $_POST['adminLastname'];
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPassword'];


    $queryEditAdmin = mysqli_query($conn,"UPDATE users SET user_username='$adminUsername',user_password='$adminPassword', user_firstname='$adminFirstname', user_lastname='$adminLastname' WHERE user_id = 1 ");

    echo"
    <script> alert('Account Updated!')
    window.location = 'http://localhost/streamlining/resources/html/account.php';
    </script>
    ";
    
}