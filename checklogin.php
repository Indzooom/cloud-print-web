<?php
 session_start();
 $username = $_POST["username"]; // This is the inputted username from the form in Login.html
 $password = $_POST["password"]; // This is the inputted password from the form in Login.html

 $con=mysqli_connect("localhost","root","","iak_printer");
	// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT username, password FROM users");

 $hituser=false;
 $hitpass=false;
	// Sarch username in the database
 while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
  if($row[0] == $username){ // If found, open ProtectedPage.php. Else goto Login.html
  $hituser=true;
   if($row[1] == $password){
    $hitpass=true;
    echo "USER FOUND!";
    $_SESSION["username"] = $username; // Creates a cookie saving the username
    $_SESSION["loggedIn"] = true; // Creates a cookie saying the user is logged in
    header("Location:upload.php");
   }else {
   }
  }else{
//   header("Location:Login.html"); // Lastly, redirect back to login page
  }
 }
 if($hitpass==false){
  echo "PASSWORD INCORRECT!<br>";
 }
 if($hituser==false){
  echo "USER NOT FOUND!<br>";
 }
?>