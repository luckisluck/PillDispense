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
    echo $time;
     		  
		  // Query database for row exist or not
            $sql = "SELECT pillAmt from dispenseauto_X where time(startTime) <= time('$time') AND time(endTime) >= time('$time') ";
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
                        $resultss="added to DB";
                        } 
                  else 
                        {
                        $resultss= "unable to add wa";
                        }
                  }
            else
                  {
                  $result="num row 0";
                  }


	echo $result;
  	echo $resultss;


?>