<?php
session_start();

if (!isset($_SESSION["user"])) {
   header("Location: index.php");
}
else{
    $newusername=$_SESSION["username"];
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPARK</title>
    
    <link rel="stylesheet" href="./profile.css">
</head>
<body>
    <section id="home_section">
        <header>
            <div class="middle">
                <div class="logo">
                    FASTPARK
                </div>
                
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="prebooking.php">PRE BOOKING</a></li>
                        <li><a href="#">NAVIGATION</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>

                    <button id="login">
                        <a href="logout.php">Logout</a>
                    </button>
                </nav>
            </div>    
        </header>
    </section>
    <div class="banner">
        <img src="banner.jpg" alt="">
        <div class="greetings">
       <?php 
        echo " <p> hello ,$newusername </p>" ;
       ?>
    </div>
        </div>
        
    
   
</body>
</html>