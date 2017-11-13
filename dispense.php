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
		   echo $result;
  	}

    if(isset($_POST['dispenseY']))
     {
		  // Innitialize Variable
		  $result='';
	   	  $dispenseY = $_POST['dispenseY'];
		  
		  // Query database for row exist or not
          $sql = "INSERT INTO dispense (dispenseY) VALUES ('$dispenseY')";
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

    if(isset($_POST['dispenseZ']))
     {
		  // Innitialize Variable
		  $result='';
	   	  $dispenseZ = $_POST['dispenseZ'];
		  
		  // Query database for row exist or not
          $sql = "INSERT INTO dispense (dispenseZ) VALUES ('$dispenseZ')";
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