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

          if( (isset($_POST['pillAmt']))   && (isset($_POST['table'])) )
            {
            $pillAmt= $_POST['pillAmt'];
            $table= $_POST['table'];
          
                  $insertX ="INSERT INTO $table (pillAmt_X) VALUES ('$pillAmt')";
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
