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
    <title>PRE BOOKING</title>
    <link rel="stylesheet" href="prebooking.css">
</head>
<body>

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

    if (isset($_POST["book"])) {
       $cityname = $_POST["cityname"];
       $parkingvenue = $_POST["parkingvenue"];
       $date = $_POST["date"];
       $time = $_POST["time"];
       
       $random=rand(10000,100000);
      date_default_timezone_set("Asia/Kolkata");
      $booked_on_date=date("Y-m-d");
      $booked_on_time=date("H:i:s");
       $sql= mysqli_query($conn,"INSERT INTO booking (city, parkingvenue,date1,username,booking_number,booked_date,time1,booked_time)
        VALUES ('$cityname', '$parkingvenue','$date','$newusername','$random','$booked_on_date','$time','$booked_on_time')");
       
        $sql1= "SELECT * FROM booking WHERE city = '$cityname' AND parkingvenue='$parkingvenue';";
        $result = mysqli_query($conn, $sql1);
        $count=mysqli_num_rows($result);
       if ($count>=0 AND $count<10){
           $random=rand(10000,100000);
           
       echo '<script>alert("Booking successful")</script>';
       }
       else{
        echo '<script>alert("parking venue is full")</script>';
       }
    }
    ?>

    
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
    <form action="prebooking.php"method="post">
    <div class="main">
        <div class="main1">
            <div class="r1"><p>Select Your City</p></div>
            <div class="r2">
                <select name="cityname" id="" >
                    <option value="Mumbai">Mumbai</option> 
                    <option value="Delhi">Delhi</option>
                    <option value="Jodhpur">Jodhpur</option>
                    <option value="Chennai">Chennai</option>
                    <option value="jaipur">Jaipur</option>
                </select>
            </div>
        </div>
        <div class="main1">
            <div class="r1"><p>Select Parking Venue</p></div>
            <div class="r2">
                <select name="parkingvenue" id="" >
                    <option value="east">east</option>
                    <option value="west">west</option>
                    <option value="north">north</option>
                    <option value="south">south</option>
                    
                </select>
            </div>
        </div>
        <div class="main1">
            <div class="r1"><p>Select Date</p></div>
            <div class="r2">
                <input type="date" name="date" required>
            </div>
        </div>        
        <div class="main1">
            <div class="r1"><p>Select Time</p></div>
            <div class="r2">
                <input type="time" name="time" required>
            </div>
        </div>  
        <div class="button">
            
            <input type="submit" value="book" name="book" class="btn btn-primary">
        </div>      
    </div>
</form>
</body>
</html>