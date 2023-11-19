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

$galleryJson = file_get_contents('../BE/gallery.json');
$gallery = json_decode($galleryJson, true);
?>

<html>
    <head>
        <title>
            Omar El Zaatari-Gallery
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

        <div class="gallery">
        <?php foreach ($gallery as $image): ?>
            <div class="image-container">
                <img src="<?php echo $image; ?>" tabindex="0"> 
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>