<?php

$servername = "35.189.32.80";
$username = "test";
$password = "test";
$dbname = "pilldispenser";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    $result= die("Connection failed: " . $conn->connect_error);
} 

 // Check whether username or password is set from android
    	
     
		  // Innitialize Variable
		  $result='';
	   	  $name = '5';
          $startTime = '05:00';
          $endTime = '05:00';
          $pillAmt = '5';
   //       $table = $_POST['table'];
		  $table='dispenseauto_X';
		  // Query database for row exist or not
          $sql = "INSERT INTO $table (timeName,startTime,endTime,pillAmt) VALUES ('$name','$startTime','$endTime','$pillAmt')";
          if ($conn->query($sql) === TRUE) 
            {
            $result="true";
            } 
            else 
            {
            $result= "false";
            }
		   echo $result;
  	
?>