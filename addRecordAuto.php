<?php

$servername = "35.189.32.80";
$username = "test";
$password = "test";
$dbname = "pilldispenser";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

 // Check whether username or password is set from android
    	
     if(isset($_POST['name']) && $_POST['startTime']) && $_POST['endTime']) && $_POST['pillAmt']) && $_POST['table']) )
     {
		  // Innitialize Variable
		  $result='';
	   	  $name = $_POST['name'];
          $startTime = $_POST['startTime'];
          $endTime = $_POST['endTime'];
          $pillAmt = $_POST['pillAmt'];
          $table = $_POST['table'];
		  
		  // Query database for row exist or not
          $sql = "INSERT INTO '$table' (timeName,startTime,endTime,pillAmt) VALUES ('$name','$startTime','$endTime','$pillAmt')";
          if ($conn->query($sql) === TRUE) 
            {
            $result="true";
            } 
            else 
            {
            $result= "false";
            }
		   echo $result;
  	}
?>