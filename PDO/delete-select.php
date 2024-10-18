<?php

include_once "lib.php";
list($host,$database,$user,$pass) = ["localhost","users","root",""];

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4",$user,$pass);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # sets errors in error mode
    echoline("Successfully Connected to Mysql.");

} catch (PDOException $error) { # first one is kind of a exeprion and second one is exeption being defing in a varable
    echoline("PDO error: faild to connect to mysql!". $error -> getMessage() . "in line: ". $error -> getLine());
}


$sql = "SELECT * from products where price > 50";
$stmt = $db -> prepare($sql);
$stmt -> execute();

echoline("------ fetch() -----");
while($row = $stmt -> fetch(pdo::FETCH_OBJ)){
    echoline($row -> id . ":" . $row -> name . "-" . $row -> price . "-" . $row -> quantity);
}

// $sql = "DELETE from products where quantity < ?";
// $stmt = $db -> prepare($sql);
// $stmt -> execute([10]);

// echoline("deleted rows" . $stmt -> rowCount());