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

 if(isset($_POST['dispenseX']))
     {

		    // Innitialize Variable
		    $result='';
	   	  $name = $_POST['name'];
         // $startTime = $_POST['startTime'];
        //  $endTime =$_POST['endTime'];
        //  $pillAmt $_POST['pillAmt'];
        //  $table = $_POST['table'];
		  
          $startTime = '00:00';
          $endTime ='00:20';
          $pillAmt '3';
          $table = 'dispenseauto_X';

          $sql = "INSERT INTO dispenseauto_X (timeName,startTime,endTime,pillAmt) VALUES ('$name','$startTime','$endTime','$pillAmt')";
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