 <?php
$servername = "35.189.32.80";
$username = "test";
$password = "test";
$dbname = "pilldispenser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
//$sql = "CREATE TABLE dispense (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,dispenseX VARCHAR(30),dispenseY VARCHAR(30),dispenseZ VARCHAR(50))";
 $sql = "INSERT INTO dispenseauto_X (timeName,startTime,endTime,pillAmt) VALUES ('Morning','18:00:00','23:59:00','2')";

if ($conn->query($sql) === TRUE) {
    echo "Table dispense created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO dispenseauto_Y (timeName,startTime,endTime,pillAmt) VALUES ('Morning','18:00:00','23:59:00','2')";

if ($conn->query($sql) === TRUE) {
    echo "Table dispense created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO dispenseauto_Z (timeName,startTime,endTime,pillAmt) VALUES ('Morning','18:00:00','23:59:00','2')";

if ($conn->query($sql) === TRUE) {
    echo "Table dispense created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?> 