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



 $sql = "SELECT * FROM dispenseauto_X ";
            $result = $con->query($sql);
            if (mysqli_num_rows($result) > 0) 
                  {
                  while($row = mysqli_fetch_assoc($result))
                    {
                    $getTemp=$row["Temperature"];
                    $getHumid=$row["Humidity"];
                    }
                 echo $getTemp;
                 echo $getHumid;     
                  }      
?>