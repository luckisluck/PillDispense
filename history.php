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



 $sql = "SELECT * FROM dispenseX_auto ";
 $sql1 = "SELECT * FROM dispenseY_auto ";
 $sql2 = "SELECT * FROM dispenseZ_auto ";

 $rows = array();
            $result = $con->query($sql);
            $result1 = $con->query($sql1);
            $result2 = $con->query($sql2);

            if (mysqli_num_rows($result) > 0 ) 
                  {
                  while($r = mysqli_fetch_assoc($result))
                    {
                    $rows['pillX'][]=$r;
                    }    
                  }

            if (mysqli_num_rows($result1) > 0 ) 
                  {
                  while($r = mysqli_fetch_assoc($result1))
                    {
                    $rows['pillY'][]=$r;
                    }    
                  }

            if (mysqli_num_rows($result2) > 0 ) 
                  {
                  while($r = mysqli_fetch_assoc($result2))
                    {
                    $rows['pillZ'][]=$r;
                    }    
                  }

             print json_encode($rows);
?>