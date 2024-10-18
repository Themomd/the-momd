<?php

include_once "lib.php";
list($host,$database,$user,$pass) = ["localhost","world","root",""];

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4",$user,$pass);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # sets errors in error mode
    echoline("Successfully Connected to Mysql.");

} catch (PDOException $error) { # first one is kind of a exeprion and second one is exeption being defing in a varable
    echoline("PDO error: faild to connect to mysql!". $error -> getMessage() . "in line: ". $error -> getLine());
}

#get Attribute
// echoline($db -> getAttribute(PDO::ATTR_CONNECTION_STATUS));


