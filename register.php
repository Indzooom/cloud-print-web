<?php
 session_start();
 $newusername = $_POST["newusername"]; // This is the inputted username from the form in Login.html
 $newpassword = $_POST["newpassword"]; // This is the inputted password from the form in Login.html

 mysql_connect('localhost'); // *** INSERT YOUR DATABSE INFORMATION HERE ***
 mysql_select_db('test') or die('Could not select database');

 mysql_query("INSERT INTO users(username, password) VALUES('" . mysql_real_escape_string($newusername) . "','" . mysql_real_escape_string(
 $newpassword) . "')")or die('Could not insert data into db');
 echo "New user created:<br>";
 echo $newusername."<br>";
 echo $newpassword."<br>";
 echo "<a href='logout.php'>Logout</a>";
?>