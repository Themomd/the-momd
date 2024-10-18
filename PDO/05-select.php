<?php

include_once "01-connection.php";
// include_once "lib.php";

function echoPeople($row){
    echo implode("-",(array)$row) . PHP_EOL; 
}

function echoPeoples($rows){
    foreach ($rows as $row) {
        echoPeople($row);
    } 
}

# use fetch all
$sql = "SELECT * FROM people WHERE age < 25";
$stmt = $db -> prepare($sql);
$stmt -> execute();
// echoline("------ fetchAll() -----");
// $rows = $stmt -> fetchAll(PDO::FETCH_OBJ);
// echoPeoples($rows);

// echoline("------ fetch() -----");
// while($row = $stmt -> fetch(pdo::FETCH_OBJ)){
//     echoline($row -> fullname . ":" . $row -> age);
// }

#getting one record of a table
$sql = "SELECT * FROM people WHERE id = 22";
$stmt = $db -> prepare($sql);
$stmt -> execute();

echoline("------ get single row -----");
while($row = $stmt -> fetch(pdo::FETCH_OBJ)){
    echoline("(".$row -> id.  ") " . $row -> fullname . " : " . $row -> age . " : " . $row -> sex);
}

// $user22 = $stmt -> fetch(PDO::FETCH_OBJ);
// echoline("($user22 -> id)  $user22 -> username");