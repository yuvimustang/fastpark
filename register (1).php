
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
if(!empty($_POST['save'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query= "SELECT * FROM user_info WHERE username = '$username'; ";
$sql1="INSERT INTO user_info (username,password) VALUES ('$username','$password');";
$result = mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0){
  echo '<script>alert("username is already taken")</script>';                 
                    
}
else{

   $sql2= mysqli_query($conn,$sql1);
 echo '<script>alert("registration successful")</script>'; 
 

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="loginstyle.css">
</head>



<body>
    <h1 class="title">Register</h1>
      <form action="register.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="username:" name="username" class="input1" required>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="input1" required>
        </div>
        <div class="btn">
            <input type="submit" value="Register" name="save" >
        </div>
         <div class="btn">
             <a href="index.php">
            <input type="button" value="Login" name="Login" >
            </a>
        </div>
      </form>
  
    
</body>
</html>