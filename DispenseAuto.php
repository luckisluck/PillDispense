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
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 // Check whether username or password is set from android
    $time=date("H:i:00");
    
     		  
		  // Query database for row exist or not
            $sql = "SELECT pillAmt from dispenseauto_X where CAST(startTime As Time) >= '23:00' AND CAST(endTime As Time) <= '23:00'";
            $result = $con->query($sql);
            if (mysqli_num_rows($result) > 0) 
                  {
                  while($row = mysqli_fetch_assoc($result))
                  {
                  $getAmt=$row["pillAmt"];
                  }   
                  $insertX ="INSERT INTO dispenseX_auto (pillAmt_X) VALUES ('$getAmt')";
                  if ($con->query($insertX) === TRUE) 
                        {
                        $resultss="true";
                        } 
                  else 
                        {
                        $resultss= "false";
                        }
                  }
            else
                  {
                  $result="false";
                  }


	echo $result;

?>