<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="../css/Readingstyle.css"/>
<title>
MindSync Reading
</title>
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <h5><span class="fas fa-brain"></span>MINDSYNC</h5>
        </div>
        <ul class="menu">
            <li class=""><a href="Homepage.php" >
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
             </a>
            </li>
            <li class="active"><a href="ReadingPage.php">
                <i class="fas fa-book-open-reader"></i>
                <span>READING</span>
             </a>
            </li>
            <li ><a href="MemoryMainPage.php">
                <i class="fas fa-puzzle-piece"></i>
                <span>MEMORY</span>
             </a>
            </li>
            <li><a href="#">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
             </a>
            </li>
            <li class="logout"><a href="Login Page.php">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
             </a>
            </li>
        </ul>
    </div>
   
  <form action="#" method="post">
    <p style="color:gold;">Note: The timer begins as soon as the page is loaded! So start reading immediately!</p>
    <div class="input-box">
        <button class="btn" id="loginButton" type="button"onclick="redirectToEasypage()">EASY</button>
    </div>


    <div class="input-box">
        <button class="backbutton" id="loginButton" type="button"onclick="redirectToHomepage()">EXIT PAGE</button>
    </div>
  </form>







    <script src="../js/ReadingScript.js"></script>
</body>





</html>