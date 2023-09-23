<?php 
include ("../../db.php") ;
if (isset($_POST["btnRegister"]))
{
$txtboxFirstname = $_POST["txtboxFirstname"];
$txtboxLastname = $_POST["txtboxLastname"];
$txtboxUsername = $_POST["txtboxUsername"];
$txtboxStudentNumber = $_POST["txtboxStudentNumber"];
$txtboxCourse = $_POST["txtboxCourse"];
$txtboxPassword = $_POST["txtboxPassword"];
$txtboxConfirmPassword = $_POST["txtboxConfirmPassword"];
$btnRegister = $_POST["btnRegister"];
$target_dirs = "../multimedia/uploaded/";
@$myFile = $target_dirs.basename($_FILES["myFile"]["name"]);
$imageFileType = strtolower(pathinfo($myFile,PATHINFO_EXTENSION));
$checkDuplicateAccount = mysqli_query($conn,"SELECT user_username FROM users WHERE user_username='$txtboxUsername'");
if(mysqli_num_rows($checkDuplicateAccount) !=0){
    echo "
            <script>
          
            alert('Username already exist');
            
            </script>
            ";
    
}else{

    if($txtboxConfirmPassword != $txtboxPassword){
        echo "
        <script>
        alert('Password does not match');
        </script>
        ";
    }else{
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $myFile)) {
         
                $insertRegister = "INSERT INTO approval(approval_firstname, approval_lastname, approval_username, approval_student_number, approval_password, approval_user_type, approval_course, approval_date_time,approval_img) VALUES ('$txtboxFirstname','$txtboxLastname','$txtboxUsername','$txtboxStudentNumber','$txtboxCourse','$txtboxPassword', 'Student',now(),'$myFile')" ;
                $insertToUsers = "INSERT INTO users(user_firstname, user_lastname, user_username, user_student_number, user_password, user_user_type, user_course, user_date_time, user_is_approved,user_img) VALUES ('$txtboxFirstname','$txtboxLastname','$txtboxUsername','$txtboxStudentNumber','$txtboxCourse','$txtboxPassword', 'Student',now(),'No','$myFile')" ;
                $queryInsertRegister = mysqli_query($conn,$insertRegister);
                $queryInsertUsers = mysqli_query($conn,$insertToUsers);

                echo "
                <script> alert('User Registered, Please wait for admin approval to be able to login')
                window.location = 'http://localhost/streamlining/resources/html/login.php';
                </script>
                ";
              
    }

        
    }
   
}


}

// if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $myFile)) {
//     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif" ) {
//       echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     }else{
//         if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $myFile)) {
//             $insertRegister = "INSERT INTO approval(approval_firstname, approval_lastname, approval_username, approval_student_number, approval_password, approval_user_type, approval_date_time) VALUES ('$txtboxFirstname','$txtboxLastname','$txtboxUsername','$txtboxStudentNumber','$txtboxPassword', 'Student',now())" ;
//             $insertToUsers = "INSERT INTO users(user_firstname, user_lastname, user_username, user_student_number, user_password, user_user_type, user_date_time, user_is_approved) VALUES ('$txtboxFirstname','$txtboxLastname','$txtboxUsername','$txtboxStudentNumber','$txtboxPassword', 'Student',now(),'No')" ;
//             $queryInsertRegister = mysqli_query($conn,$insertRegister);
//             $queryInsertUsers = mysqli_query($conn,$insertToUsers);
//           }
//     }
// }

?>