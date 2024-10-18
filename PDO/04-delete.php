<?php

include_once "01-connection.php";

// $sql = "DELETE from people where age > :age";
// $stmt = $db -> prepare($sql);
// $stmt -> execute(["age" => 60]);

// echoline("deleted rows" . $stmt -> rowCount());

$sql = "DELETE from people where id = ?";
$stmt = $db -> prepare($sql);
$stmt -> execute([24]);

echoline("deleted rows" . $stmt -> rowCount());