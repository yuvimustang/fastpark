<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTPARK</title>
    <link rel="shortcut icon" href="Images/Logo-Law-Prep.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
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
                        <li><a href="navigation.html">NAVIGATION</a></li>
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
        <div class="banner_content">
            <h1>Easy Parking Solution</h1>
            <h3>Have a safe space in the midst of city traffic</h3>
            <button id="know_more">KNOW MORE</button>
            <button id="contact_us">Contact Us</button>
        </div>
    </div>
</body>
</html>