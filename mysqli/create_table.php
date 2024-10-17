<?php
include_once '01-connection.php';

$table = "
CREATE TABLE Guys(
id int NOT NULL,
fullname varchar(256) NOT NULL,
age int NOT NULL,
PRIMARY KEY (id)
);";

// if($mysqli -> query($table)){
//     echo "table created" . PHP_EOL;
// }else{
//     echo "RIDI" . PHP_EOL;
// }

// for($i = 1; $i <= 5; $i++){
//     $table_sql = str_replace("Guys", "Guys$i", $table);
//     if($mysqli -> query($table_sql)){    
//         echo "Table sucessfully created". PHP_EOL;
//     }else{
//         echo "Table is not created!" . PHP_EOL;
//     }
//  }

 for($i = 1; $i <= 5; $i++){
    $mysqli -> query("DROP Table Guys$i");
 }