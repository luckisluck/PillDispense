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



 $sql = "SELECT * FROM dispenser_pillAmt ";

            $result = $con->query($sql);
            if (mysqli_num_rows($result) < 1) 
                  {
                   $insertX ="INSERT INTO dispenser_pillAmt (pillAmtX,pillAmtY,pillAmtZ) VALUES ('0','0','0')";
                  if ($con->query($insertX) === TRUE) 
                        {
                        $results="true";
                        } 
                  else 
                        {
                        $results= "false";
                        }
                  }
              else{

                    if( (isset($_POST['pillAmtx'])) )
                        {
                        $pillAmtx=$_POST['pillAmtx'];    
                        $insertX ="UPDATE dispenser_pillAmt SET pillAmtX='$pillAmtx'";
                        if ($con->query($insertX) === TRUE) 
                                {
                                $results="true";
                                } 
                        else 
                                {
                                $results= "false";
                                }       
                        }


                        else if( (isset($_POST['pillAmty'])) )
                        {
                        $pillAmty=$_POST['pillAmty'];    
                        $insertX ="UPDATE dispenser_pillAmt SET pillAmtY='$pillAmty'";
                        if ($con->query($insertX) === TRUE) 
                                {
                                $results="true";
                                } 
                        else 
                                {
                                $results= "false";
                                }       
                        }

                        else if( (isset($_POST['pillAmtz'])) )
                        {
                        $pillAmtz=$_POST['pillAmtz'];    
                        $insertX ="UPDATE dispenser_pillAmt SET pillAmtZ='$pillAmtz'";
                        if ($con->query($insertX) === TRUE) 
                                {
                                $results="true";
                                } 
                        else 
                                {
                                $results= "false";
                                }       
                        }

            }
?>