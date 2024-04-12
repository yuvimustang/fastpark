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
        
    <div class="booking_table">
        <table>
            <thead>
  <tr>
    <th scope="col">Booking Date</th>
    <th scope="col" >Booking Time</th>
    <th scope="col" >City</th>
    <th scope="col" >parking venue</th>
    <th scope="col" >Booked park date</th>
    <th scope="col" >Booked park time</th>
    <th scope="col" >Booking number</th>
  </tr>
            </thead>
            
            <tbody>
                
                 <?php
$servername = "localhost";
$username1 = "id21989231_yuvi";
$password1 = "Lrts#300";
$dbname="id21989231_yuvi";
// Create connection
$conn = new mysqli($servername, $username1, $password1,$dbname);

// Check connection
if (!$conn) {
    die("Something went wrong;");
}
else{
    $sql="SELECT * FROM booking WHERE username= '$newusername' ORDER BY booked_date ASC;";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        $booked_date=$row["booked_date"];
        $booked_time=$row["booked_time"];
        $city=$row["city"];
        $parkingvenue=$row["parkingvenue"];
        $date1=$row["date1"];
        $time1=$row["time1"];
        $booking_number=$row["booking_number"];
        
        echo "
    <tr>
    <th scope='row'>$booked_date</th>
    <td>$booked_time</td>
    <td>$city</td>
    <td>$parkingvenue</td>
    <td>$date1</td>
    <td>$time1</td>
    <td>$booking_number</td>
  </tr>  ";
        
    }
    
}
?>
 
  </tbody>
</table>
    </div>
   
</body>
</html>