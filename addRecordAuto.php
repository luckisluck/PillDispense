<?php
date_default_timezone_set('Asia/Bangkok');
$servername = "35.189.32.80";
$username = "test";
$password = "test";
$dbname = "pilldispenser";

$con=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  $a= "Failed to connect to MySQL: " . mysqli_connect_error();
  }


 
		        $result=;
            $timeName='test';
            $startTime='00:00:00';
            $endTime='06:00:00';
            $pillAmt='1';
          
                  $insertX ="INSERT INTO dispenseauto_X (timeName,startTime,endTime,pillAmt) VALUES ('$timeName','$startTime','$endTime','$pillAmt')";
                  if ($con->query($insertX) === TRUE) 
                        {
                        $results="true";
                        } 
                  else 
                        {
                        $results= "false";
                        }
                  
                  echo $result;

?>
