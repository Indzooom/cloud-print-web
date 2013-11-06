<?php
 session_start();
 if(!$_SESSION['loggedIn']) // If the user IS NOT logged in (the loggedIn cookie is created), forward them back to the login page
 {
  header("location:index.php");
 }
?>

<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

 <?php
  require_once 'GoogleCloudPrint.php';
  $gcp = new GoogleCloudPrint();
  echo '<p>Welcome, ' . ucfirst($_SESSION['username']) . '!</p>';
 ?>
<form action="response.php" method="post" enctype="multipart/form-data">
	<?php 
		if($gcp->loginToGoogle("brilliantsurya@gmail.com", "ordinary94")) {
			$printers = $gcp->getPrinters(); 
		}
	?>
	<label for="printer">Select Printer</label>
	<select name="printer">
		<?php for($i=0; $i < count($printers); $i++) :?>
			<option value=<?=$i?>><?=$printers[$i]['name']?></option>
		<?php endfor; ?>
	</select>
	
	<label for="file">File</label>
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" value="Print" class="btn">
	
</form>
	<INPUT Type="BUTTON" VALUE="Logout" ONCLICK="window.location.href='logout.php'" class="btn">
</body>
</html>