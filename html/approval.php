<?php 
include ("../php/approval.php") ;
include ("../php/adminName.php") ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/modal.css">
    <style>
  /* Styles for the modal */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
  }

  /* Styles for the modal content */
  .modal-content {
    display: block;
    margin: 0 auto;
    max-width: 90%;
    max-height: 90%;
  }

  /* Styles for the close button */
  .close {
    position: absolute;
    top: 15px;
    right: 15px;
    color: white;
    font-size: 30px;
    cursor: pointer;
  }
</style>
</head>
<body>
    <section>
        
    <div class="flex space-x-6 py-4 bg-gradient-to-r from-blue-500 to-orange-500">
            <div class="w-1/2 pl-6">
                <div class="flex">
                    <img src="../multimedia/images/Bicol_University.png" class="h-20" alt="">
                    <img src="../multimedia/images/bupc logo.png" class="h-20" alt="">
                    <div class="mt-3 font-bold ml-2 text-xl">
                        <label for="">Streamlining BU-Polangui Theses </label><br>
                        <label class=""for="">and Capstone Management</label>
                    </div>
                    
                </div>
            
            </div>
            

            <div class="flex space-x-6 w-1/2 place-content-end pr-12 mt-5">
                <div><button onclick="goToApproval()"><i class="fa fa-bell text-3xl "></i><?php include ("../php/notifcount.php"); notifCount(); ?></button></div>
                <div>
                <a href="http://localhost/streamlining/resources/html/account.php" class="font-bold" for=""><?=$_SESSION['user_firstname_admin']?> <?=$_SESSION['user_lastname_admin']?></a><br>
                    <label class="ml-32 font-bold" for="">Librarian</label>
                </div>
                <div>
                    <img class="rounded-full h-14 w-14" src="../multimedia/images/library.png" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="">
        <div class="flex">
        <?php include ("sidenav.php");?>
            <div class="container-fluid bg-gray-300 w-full">
                <div class="mx-auto bg-white w-5/6 rounded-lg mb-10">
                        <div class="">
                            <div class="container h-screen p-5 mt-10 text-xl m overflow-y-scroll">
                            <label class="font-bold text-2xl" for="">User Pending Approvals</label>  
                            <div class="mt-20">
                                <table class="table-auto mx-auto  w-full text-left">
                                <thead class=" border-b border-black relative py-4">
                                    <tr class="">
                                      <th>Student No.</th>
                                      <th>Fullname</th>
                                      <th>Username</th>
                                      <th>ID Picture</th>
                                      <th>Recieved</th>
                                      <th>Respond</th>                  
                                    </tr>
                                  </thead>
                                  <div id="imageModal" class="modal">
                                        <span class="close" onclick="closeImageModal()">&times;</span>
                                        <img id="enlargedImage" class="modal-content" src="" alt="Enlarged Image"></div>
                                  <tbody class="">
                                    <?php tableApprovalFunction(); ?>
                                  </tbody>
                                 
                                </table>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
    </section>
</body>
</html>
<script>
    function clickasd(){console.log('I am clicked!')}
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
</script>