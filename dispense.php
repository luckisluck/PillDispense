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
     echo "Hello";	
     if(isset($_POST['dispenseX']))
     {
		  // Innitialize Variable
		  $result='';
	   	  $dispenseX = $_POST['dispenseX'];
		  
		  // Query database for row exist or not
          $sql = "INSERT INTO dispense (dispenseX) VALUES ('$dispenseX')";
          if ($conn->query($sql) === TRUE) 
            {
            $result="true";
            } 
            else 
            {
            $result= "false";
            }
		  
  	}

?>