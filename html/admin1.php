<?php 
include ("../php/admin1.php") ;
include ("../php/adminName.php");
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
                <div class="mx-auto bg-white w-6/6 rounded-lg mb-10 ">
                        <div class="">
                            <div class="container h-screen p-5 mt-0 text-xl m overflow-x-auto">
                            <label id="dateTimeLabel" class="font-bold"></label>

                                <div class="flex space-x-8 mt-10">
                                    <div class="container w-50">
                                        <div class="place-content-center h-36 flex space-x-10 mb-6">
                                            <div class="container border rounded-lg border-black flex flex-col px-4 py-2">
                                                <label for="" class="font-bold text-2xl"><?php 
visitorWidget();?> <i class="fa fa-user-circle ml-12 fa-lg "></i></label> 
                                                <label for="" class="mt-16">Visitor Count</label>
                                            </div>
                                            <div class="container border rounded-lg border-black flex flex-col px-4 py-2">
                                                <label for="" class="font-bold text-2xl"> <?php 
downloadWidget();?><i class="fa fa-download ml-12 fa-lg"></i></i></label> 
                                                <label for="" class="mt-16">Downloads</label>
                                            </div>
                                        </div>
                                        <div class="border rounded-lg border-black h-5/6 px-4 py-2">
                                            <label for="" class="font-bold">Users List</label>
                                            <div class="flex my-5 border-t-2 border-black w-full" >
                                                <table class="w-full">
                                                    <tr>
                                                        <th>Student No.</th>
                                                        <th>Username</th>
                                                        <th>Course</th>
                                                    </tr>
                                                        <?php userListWidget();?>
                                                    
                                                </table>
                                            </div>                                     
                                        </div>
                                    </div>

                                    <div class="container w-50">
                                        <div class="place-content-center flex h-36 mx-auto space-x-8 mb-6">
                                            <div class="container border rounded-lg border-black flex flex-col px-4 py-2">
                                                <label for="" class="font-bold text-2xl">2500 <i class='fa fa-user-circle ml-12 fa-lg'></i></label> 
                                                <label for="" class="mt-16">Bookmarks</label>
                                            </div>
                                            <div class="container border rounded-lg border-black flex flex-col px-4 py-2">
                                                <label for="" class="font-bold text-2xl"><?php searchCountWidget();?> <i class="fa fa-search ml-12 fa-lg"></i></label>
                                                <label for="" class="mt-16">Searches</label>
                                            </div>  
                                        </div>
                                        <div class="border rounded-lg h-5/6 border-black px-4 py-2">
                                            <label for="" class="font-bold">Thesis List</label>
                                            <div class="flex my-5 border-t-2 border-black w-full" >
                                                <table class="w-full">
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Authors</th>
                                                        <th>Course</th>
                                                        <th>Pages</th>
                                                    </tr>
                                                    <?php thesesWidget() ?>
                                                </table>
                                            </div>      
                                        </div>
                                    </div>  
                                </div>      
                            </div>
                        </div>
                </div>
                          
            </div>
    </section>

    
</body>
</html>
<script>
    function goToApproval(){
    window.location = 'http://localhost/streamlining/resources/html/approval.php';
}
</script>

<script>
    function updateDateTime() {
        const now = new Date();
        const options = { 
            timeZone: 'Asia/Manila',
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric', 
            hour: 'numeric', 
            minute: 'numeric', 
            second: 'numeric', 
            hour12: true 
        };

        const formatter = new Intl.DateTimeFormat('en-US', options);
        const formattedDateTime = formatter.format(now);

        document.getElementById('dateTimeLabel').textContent = formattedDateTime;
    }

    // Call the function initially to display the current date and time in the Manila time zone
    updateDateTime();

    // Update the date and time every second
    setInterval(updateDateTime, 1000);
</script>