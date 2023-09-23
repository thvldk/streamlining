<?php 
include ("../../db.php") ;
if (isset($_POST["btnLogin"]))
{
    $txtboxUsername = $_POST["txtboxUsername"];
    $txtboxPassword = $_POST["txtboxPassword"];
    $btnLogin = $_POST["btnLogin"];

    $verifyLogin = mysqli_query($conn,"SELECT * FROM users WHERE user_username='$txtboxUsername' AND user_password='$txtboxPassword' AND user_is_approved='Yes'");

    if(mysqli_num_rows($verifyLogin) !=0){
        $checkUserType = mysqli_query($conn,"SELECT user_user_type FROM users WHERE user_username='$txtboxUsername'");
        while($row = mysqli_fetch_array($checkUserType)){ 
            $_SESSION['user_user_type'] = $row['user_user_type'];
        }
        if ($_SESSION['user_user_type'] == 'Admin'){
            echo "
            <script> 
                window.location = 'http://localhost/streamlining/resources/html/admin1.php';
            </script>
            ";
           
        }else{
            echo "
            <script> 
                window.location = 'http://localhost/streamlining/resources/html/logout.php';
            </script>
            ";
            $loginCount = mysqli_query($conn,"INSERT INTO logins(login_date_time, login_username) VALUES (now(),'$txtboxUsername')");
        }
        
        
    }else{
            echo "
            <script>
            alert('Wrong Username or Password');
            </script>
            ";
    }
}
?>