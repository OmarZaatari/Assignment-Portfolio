<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../index.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {

    session_unset();
    session_destroy();

    header("Location: ../index.html");
    exit();
} 

?>


<html>
<head>

    <title>Omar El Zaatari</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div id="page-header">
        Omar El Zaatari, Senior LAU student
        <div class="header-content"><span>Welcome, <span><?php echo $_SESSION["username"]; ?></span><i class="fa fa-terminal" style="color: rgb(57, 172, 22); font-size: 20px; padding-left: 5px;"></i></h1></div>
        <form class="header-content"  action="" method="post">
                <input type="submit" name="logout" value="Logout" id="logout-btn">
            </form>
        <div id="header-menu">
            <div class="header-content"><a href="home.php" >Home</div>
            <div class="header-content"><a href="gallery.php">Gallery</a></div>
            <div class="header-content"><a href="contact.php" style="text-decoration:none">Contact Me!</a></div>
        </div>
    </div>

    <div id="page-content">

        <div class="content-box" style="top: 10%; left: 35%;">
            <h2>About me!</h2>
            College student with a passion for technology and customer service. Seeking an Intern position- to develop and enhance professional skills, including working in a fast-paced environment and troubleshooting complex software issues. Highly organized and detail-oriented individual eager to learn and contribute to the team.
        </div>
        <div class="content-box" style="top: 55%; left: 10%">
            <h2>Work Experience</h2>

            <div class="box-element">Touch, Web Develpment Intern, August 2023.</div>
            <hr>
            <div class="box-element">Touch, System Administration Intern, August 2022.</div>
        </div>
        <div class="content-box" style="top: 55%; right: 10%">
            <h2>Projects</h2>

            <div class="box-element">Oracle SQL Database</div>
            <hr>
            <div class="box-element">Unity Game Development</div>
            <hr>
            <div class="box-element">Designed and implemented an e-commerce site</div>
            <hr>
            <div class="box-element">Parallelized a Neural Network</div>
            <hr>
            <div class="box-element">Designed and Implemented a Login Page With a MSSQL Database</div>
        </div>
    </div>
 
</body>
</html>
