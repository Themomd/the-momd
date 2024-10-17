<?php

include_once "01-connection.php";
$sql = "
CREATE TABLE *TABLE*(
    id int AUTO_INCREMENT,
    fullname varchar(256),
    age int UNSIGNED,
    sex ENUM('f','m'),
    isSingle bool DEFAULT 1,
    PRIMARY KEY (id)
);";

// if($mysqli -> query($sql)){
//     echo "Table sucessfully created";
// }else{
//     echo "Table is not created!";
// }

# you can use this loop method to creat multiple tables
 for($i = 1; $i <= 3; $i++){
    $table_sql = str_replace("*TABLE*", "people$i", $sql);
    if($mysqli -> query($table_sql)){    
        echo "Table sucessfully created". PHP_EOL;
    }else{
        echo "Table is not created!" . PHP_EOL;
    }
 }

 # to run a delete query for moultiple tables

//  for($i = 1; $i <= 7; $i++){
//     $mysqli -> query("drop table people$i");
// }
