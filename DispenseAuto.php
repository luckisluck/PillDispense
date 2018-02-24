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
    
     		if( (isset($_POST['dispense'])) )
            {
		  // Query database for row exist or not
            $sql = "SELECT pillAmt FROM dispenseauto_X where startTime <= '$time' AND endTime >='$time'";
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





            $sql = "SELECT pillAmt FROM dispenseauto_X where startTime <= '$time' AND endTime >='$time'";
            $result1 = $con->query($sql);
            if (mysqli_num_rows($result1) > 0) 
                  {
                  while($row1 = mysqli_fetch_assoc($result1))
                  {
                  $getAmt1=$row1["pillAmt"];
                  }   
                  $insertY ="INSERT INTO dispenseY_auto (pillAmt_Y) VALUES ('$getAmt1')";
                  if ($con->query($insertY) === TRUE) 
                        {
                        $results2="true";
                        } 
                  else 
                        {
                        $results2= "false";
                        }
                  }
            else
                  {
                  $result1="false";
                  }

         



         $sql = "SELECT pillAmt FROM dispenseauto_X where startTime <= '$time' AND endTime >='$time'";
            $result2 = $con->query($sql);
            if (mysqli_num_rows($result2) > 0) 
                  {
                  while($row2 = mysqli_fetch_assoc($result2))
                  {
                  $getAmt2=$row2["pillAmt"];
                  }   
                  $insertZ ="INSERT INTO dispenseZ_auto (pillAmt_Z) VALUES ('$getAmt2')";
                  if ($con->query($insertZ) === TRUE) 
                        {
                        $results3="true";
                        } 
                  else 
                        {
                        $results3= "false";
                        }

                  }
            else
                  {
                  $result2="false";
                  }

	echo $result;
            }

?>