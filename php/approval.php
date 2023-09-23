<?php 
include ("../../db.php") ;

function tableApprovalFunction(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";

    $y = 0;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $showApprovalData = mysqli_query($conn,"SELECT * FROM approval");
    while($row = mysqli_fetch_array($showApprovalData)){ 
        $_SESSION['approval_student_number'] = $row['approval_student_number'];
        $_SESSION['approval_firstname'] = $row['approval_firstname'];
        $_SESSION['approval_lastname'] = $row['approval_lastname'];
        $_SESSION['approval_username'] = $row['approval_username'];
        $_SESSION['approval_img'] = $row['approval_img'];
        $_SESSION['approval_date_time'] = $row['approval_date_time'];
        $_SESSION['approval_password'] = $row['approval_password'];

        echo "
            <tr class='border-t border-b border-black'>
            <td>".$_SESSION['approval_student_number']."</td>
            <td>". $_SESSION['approval_firstname']." ". $_SESSION['approval_lastname']."</td>
            <td>".$_SESSION['approval_username']."</td>
            <td><img src='".$_SESSION['approval_img']."' class='h-30 w-20' alt='' id='myBtn' ></td>
          
            <td>".$_SESSION['approval_date_time']."</td>
            <td>
            <form action='' method='POST'>
                <button type='submit' value='".$_SESSION['approval_username']."' name='btnApprove' id='myBtn".$y++."' title='' onclick='modalClick()'>Approve</button>
                
                <button value='".$_SESSION['approval_username']."' name='btnDecline'>Decline</button>
            </td>
        </tr>
        </form>
        
        
        ";
        $approval_username = $_SESSION['approval_username'];
$modalContent = mysqli_query($conn,"SELECT * FROM approval WHERE approval_username='$approval_username'");
while($row = mysqli_fetch_array($modalContent)){
        echo "
        <div id='myModal' class='modal'>
        <div class='modal-content'>
            <div class='modal-header'>
            <span class='close'>&times;</span>
           
            </div>
            <div class='modal-body flex'>
                
                <div class='container w-4/5 mr-10'>
                    <img src='' alt='' id='studentIMG'>
                    <p class='text-xs text-lime-400' id='txtAvailability'>".$_SESSION['approval_username']." </p>
                    <br>
                    <span class='whitespace-nowrap'>
                        <label class='' for='' id='studentName'>Details</label> 
                       <hr class='h-1 mx-auto my-4 bg-gray-100 border-0 rounded dark:bg-gray-700'>
                    </span>
                    <div class='flex flex-col text-sm'>
                        <label for='' id='lblTitle'>title</label>
                    </div>
                    

                    
                </div>
            </div>
            
        </div>
    </div>
    
";
}
$modalContent = mysqli_query($conn,"SELECT * FROM approval WHERE approval_username='$approval_username'");
while($row = mysqli_fetch_array($modalContent)){
    $_SESSION['approval_img'] = $row['approval_img'];
    echo "
    <script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('myBtn".$y."');
        var span = document.getElementsByClassName('close')[0];
        btn.onclick = function() {
        modal.style.display = 'block';
        document.getElementById('studentName').innerHTML = '".$row['approval_firstname']."'
        console.log('click');
        }
        span.onclick = function() {
        modal.style.display = 'none';
        }
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
        }
    </script>"
    ;
}
$modalContent = mysqli_query($conn, "SELECT * FROM approval WHERE approval_username='$approval_username'");
while ($row = mysqli_fetch_array($modalContent)) {
    $_SESSION['approval_img'] = $row['approval_img'];
    echo "
    <script>
        function openImageModal() {
            var modal = document.getElementById('imageModal');
            var image = document.getElementById('enlargedImage');
            image.src = '" . $_SESSION['approval_img'] . "';
            modal.style.display = 'block';
        }

        function closeImageModal() {
            var modal = document.getElementById('imageModal');
            modal.style.display = 'none';
        }
    </script>";
}

    }
    
}
if (isset($_POST['btnApprove'])){
    $btnApprove = $_POST['btnApprove'];
    $deleteUserQuery = mysqli_query($conn,"DELETE FROM approval WHERE approval_username='$btnApprove'");
    $updateApproval = mysqli_query($conn,"UPDATE users SET user_is_approved='Yes' WHERE user_username='$btnApprove'" );
    echo"
    <script> alert('Student Approved') </script>
    ";
}
if(isset($_POST['btnDecline'])){
    $btnDecline = $_POST['btnDecline'];
    $deleteUserQuery = mysqli_query($conn,"DELETE FROM approval WHERE approval_username='$btnDecline'");
    $updateApproval = mysqli_query($conn,"DELETE FROM users WHERE user_username='$btnDecline'" );
    echo"
    <script> alert('Entry Deleted') </script>
    ";
}
function deleteUserFunction(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stream_lining";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
}
// echo "
//     <script>
//         function deleteUser(){
//             ".deleteUserFunction()."
//         }

//     </script>
// ";

?>