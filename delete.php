<?php
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

          if(  (isset($_POST['name'])) && (isset($_POST['table']))  )
                {
                $Name= $_POST['name'];
                $table=$_POST['table'];
                $insertX ="DELETE FROM $table WHERE timeName=$Name";
                  if ($con->query($insertX) === TRUE) 
                        {
                        $result="true";
                        } 
                  else 
                        {
                        $result= "false";
                        }
                }
                  
                  echo $result;
?>
