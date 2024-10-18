<?php

include_once "01-connection.php";

// $sql = "UPDATE people SET isSingle = 0";
// $stmt = $db -> prepare($sql);
// $stmt -> execute();

// $sql = "UPDATE people SET isSingle = 1 where id < :?";
// $stmt = $db -> prepare($sql);
// $stmt -> execute([20]);
// echoline($stmt -> rowCount());

$sql = "UPDATE people SET isSingle = :isSingle where id < :id";
$stmt = $db -> prepare($sql);
$stmt -> execute(["id" => 20, "isSingle" => 1]);
echoline($stmt -> rowCount());