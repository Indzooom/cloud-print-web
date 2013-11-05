<?php
 session_start();
 if(!$_SESSION['loggedIn']) // If the user IS NOT logged in (the loggedIn cookie is created), forward them back to the login page
 {
  header("location:index.php");
 }
?>
<?php
//$allowedExts = array("gif", "jpeg", "jpg", "png");
//$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
//if ($_FILES["file"]["size"] < 20000)  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . uniqid($_SESSION('username').'_').$extension);
      echo "Stored in: " . "upload/" ;
      }
    }
/*  }
 else
  {
  echo "Invalid file";
  } */
?>

<?php

// To add printers to your account follow the following link 
// https://support.google.com/cloudprint/answer/1686197
/**
 * PHP implementation of Google Cloud Print
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

require_once 'GoogleCloudPrint.php';

// Create object
$gcp = new GoogleCloudPrint();

// Login to Googel, email address and password is required
if($gcp->loginToGoogle("elfatahwashere@gmail.com", "m4carbine")) {
	
	// Login is successfull so now fetch printers
	$printers = $gcp->getPrinters();
	echo "<pre>";
	print_r($printers);
	echo "</pre>";
	
	$printerid = "";
	if(count($printers)==0) {
		
		echo "Could not get printers";
		exit;
	}
	else {
		
		$printerid = $printers[0]['id']; // Pass id of any printer to be used for print
	}
	// Send document to the printer
	//$resarray = $gcp->sendPrintToPrinter($printerid,  $_FILES["file"]["name"] , "./upload/".$_FILES["file"]["name"], $_FILES["file"]["type"]);
	$jobs = $gcp->getJobs($printerid);
	
	echo '<br><br>result<br>';
	$data= json_decode($jobs, true);
	$datajobs = $data['jobs'];
	$datajobs['0']['title'];
	
	for($i=0; $i < count($datajobs); $i++){
		echo 'title: '.$datajobs[$i]['title'].'<br>';
		echo 'number of page: '.$datajobs[$i]['numberOfPages'].'<br><br>';
	}
	
	/*if($resarray['status']==true) {
		
		echo "Document has been sent to printer and should print shortly.";
	}
	else {
		
		echo "An error occured while printing the doc. Error code:".$resarray['errorcode']." Message:".$resarray['errormessage'];
	}*/
	
}
else {
	
	echo "Login failed please check login info.";
	exit;
}
