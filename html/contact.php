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
        <title>
            Omar El Zaatari-Contact
        </title>
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

                
        </div>

        <div id="page-content" style="margin-top: 70px;" >

        <center><h1 style="color: #F4EEE0; font-family: 'Courier New', Courier, monospace;">Contact Me!</h1></center>
        <div class="ico">
            <img src="../images/email.png" style="height: 150px;width: 150px;"> omarzaatari@lau.edu
        </div>
        
        <div class="ico">
            <img src="../images/linkedin.png" style="height: 150px;width: 150px;"> <a href="https://linkedin.com/in/omarzaatari">in/omarzaatari</a>
        </div>

        <div class="ico">
        <img src="../images/close.png" alt="Phone" style="height: 150px;width: 150px;">+961 70054477
        </div>
    </div>
</body>
</html>
