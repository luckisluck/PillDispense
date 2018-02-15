<?php

$servername = "35.189.32.80";
$username = "test";
$password = "test";
$dbname = "pilldispenser";

$con=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


 // Check whether username or password is set from android
    	
     if(isset($_POST['name']))
     {
		  // Innitialize Variable
		  $result='';
	   	  $name = $_POST['name'];
          $startTime = '10:00';
          $endTime ='11:00';
          $pillAmt = '5';
   //       $table = $_POST['table'];
		  $table='dispenseauto_X';
		  // Query database for row exist or not
          $sql = "INSERT INTO $table (timeName,startTime,endTime,pillAmt) VALUES ('$name','$startTime','$endTime','$pillAmt')";
          if ($con->query($sql) === TRUE) 
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