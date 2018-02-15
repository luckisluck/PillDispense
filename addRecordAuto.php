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

          if(  (isset($_POST['name'])) && (isset($_POST['startTime']))  && (isset($_POST['endTime']))   && (isset($_POST['pillAmt']))   && (isset($_POST['table'])) )
            {
            $timeName= $_POST['name'];
            $startTime=$_POST['startTime'];
            $endTime= $_POST['endTime'];
            $pillAmt= $_POST['pillAmt'];
            $table= $_POST['table'];
          
                  $insertX ="INSERT INTO $table (timeName,startTime,endTime,pillAmt) VALUES ('$timeName','$startTime','$endTime','$pillAmt')";
                  if ($con->query($insertX) === TRUE) 
                        {
                        $results="true";
                        } 
                  else 
                        {
                        $results= "false";
                        }
                  
                  echo $result;
            }
?>
