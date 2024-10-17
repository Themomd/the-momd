<?php
include_once "01-connection.php";

// $sql = "UPDATE people set sex='f' where id > 7 ";

// if($mysqli -> query($sql)){    
//     echo $mysqli -> affected_rows, " Records has been sucessfully UPDATED". PHP_EOL;
// }else{
//     echo "FAILD TO UPDATE!" . PHP_EOL;
// }

$ageIncVal = 1;
$sql = "UPDATE people set age = age + ? where id >= 7 ";

$stm = $mysqli -> prepare($sql);
$stm -> bind_param('i',$ageIncVal);
$stm -> execute();

print_r($stm);