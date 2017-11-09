<?php

$sql =CREATE TABLE `people` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 100 ) NOT NULL ,
`sex` BOOL NOT NULL DEFAULT '1',
`birthyear` INT NOT NULL
)

if (query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} 

else {
    echo "Error creating table:";
}

?>