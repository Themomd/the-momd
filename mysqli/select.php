<?php

$mysqli = new mysqli("localhost","root","","users");

if($mysqli -> connect_errno){
    echo "faild to connect to mysql! error: ". $mysqli -> connect_error;
    exit;
}

# connection is ok.
echo "Successfully Connected to Mysql.<hr>". PHP_EOL;

$mysqli -> set_charset('utf8');

echo "<table>";
$sql = "SELECT * from products where price > 100";
$stmt = $mysqli -> prepare($sql);
$stmt -> execute();
$stmt -> bind_result($id,$name,$price,$quantity);

while ($stmt -> fetch()) {
    echo "$id : $name : $price : $quantity<hr>";
}
echo "</table>";
