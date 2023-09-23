<?php 
include ("../../db.php") ;
if (isset($_POST["btnLogout"]))
{
    echo "
    <script> 
        window.location = 'http://localhost/streamlining/resources/html/login.php';
    </script>
";
}
?>