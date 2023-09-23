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
            <div class="w-1/3 pl-6">
                <div class="flex">
                    <img src="../multimedia/images/Bicol_University.png" class="h-20" alt="">
                    <img src="../multimedia/images/bupc logo.png" class="h-20" alt="">
                    <div class="mt-3 font-bold ml-2 text-xl">
                        <label for="">Streamlining BU-Polangui Theses </label><br>
                        <label class=""for="">and Capstone Management</label>
                    </div>
                    
                </div>
            
            </div>
            <div class="flex space-x-12 w-1/3 place-content-center font-bold mt-5 text-lg">
                <div><button> <a href="http://localhost/streamlining/resources/html/logout.php">Home</a> </button></div>
                <div><button> <a href="http://localhost/streamlining/resources/html/thesis.php">Thesis</a></button></div>
                <div><button> <a href="http://localhost/streamlining/resources/html/news.php">Thesis Guide</a></button></div>
            </div>

            
            <div class="flex space-x-6 w-1/3 place-content-end pr-12 mt-5">
            <a href="http://localhost/streamlining/resources/html/search_history.php" class="button-link"><div>
                    <i class="fa fa-clock-o fa-lg mt-3"></i></div>
            </a>
            <a href="http://localhost/streamlining/resources/html/bookmark.html" class="button-link"><div>
                    <i class="fa fa-star fa-lg mt-3"></i></div>
            </a>
                <div><button class="bg-blue-500 rounded-full w-28 h-10 font-bold" onclick="logout()">Logout</button></div>
            </div>
        </div>

    </section>
<!-- Main content section -->
<section class="py-6 px-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Welcome to Streamlining BU-Polangui Theses and Capstone Management Thesis Guide</h1>
        <p class="mt-4">Find expert tips on how to format and follow guidelines for your thesis or capstone project.</p>

        <!-- Bookshelf container -->
        <div class="bookshelf">
            <!-- Category: BSED, BEED -->
            <div class="category">
                <h2>General Thesis Guidelines</h2>
                <ul class="book-list">
                    <li>
                        <a href="../files/General-Thesis-Format-1.pdf" target="_blank">
                            <img src="../multimedia/images/thesis.png" alt="Study Guide Preview 1">
                            <div class="book-title">General Thesis Format</div>
                        </a>
                    </li>
                    <li>
                        <a href="../files/APA7.pdf" target="_blank">
                            <img src="../multimedia/images/apa7.png" alt="APA 7 Format">
                            <div class="book-title">APA 7 Format</div>
                        </a>
                    </li>
                    <!-- Add more study guides for this category -->
                </ul>
            </div>
            <!-- Category: BSIT, BSIS, BSCS -->
            <div class="category">
                <h2>For BSIT, BSIS, BSCS</h2>
                <ul class="book-list">
                    <li>
                        <a href="../files/StudyGuide-CapstoneProject.pdf" target="_blank">
                            <img src="../multimedia/images/bsitnail.png" alt="Study Guide Preview 1">
                            <div class="book-title">Study Guide</div>
                        </a>
                    </li>
                    <li>
                        <a href="../files/Sample Concept Paper.pdf" target="_blank">
                            <img src="../multimedia/images/sample.png" alt="Concept Paper Preview">
                            <div class="book-title">Sample Concept Paper</div>
                        </a>
                    </li>
                    <li>
                        <a href="../files/Work Instruction.pdf" target="_blank">
                            <img src="../multimedia/images/work.png" alt="Work Instruction Preview">
                            <div class="book-title">Work Instruction for Student Researchers</div>
                        </a>
                    </li>
                    <!-- Add more study guides for this category -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Add CSS styles for the bookshelf -->
<style>
    .bookshelf {
        background-color: #f3f3f3;
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .category {
        margin-bottom: 20px;
    }

    .category h2 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .book-list {
        list-style-type: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .book-list li {
        flex: 0 0 calc(33.33% - 20px); /* Three columns with a 20px gap */
        text-align: center;
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
    }

    .book-list img {
        max-width: 100%;
        height: auto;
    }

    .book-title {
        margin-top: 10px;
        font-weight: bold;
    }

    .book-list a {
        text-decoration: none;
        color: #333;
        display: block;
    }
</style>
</body>
</html>
<script>
function logout(){
        window.location = "http://localhost/streamlining/resources/html/login.php";
    }
</script>
