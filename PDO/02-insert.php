<?php

include_once "01-connection.php";

// $sql = "INSERT INTO people (fullname,age) values (?,?)";
// $stmt = $db -> prepare($sql);
// $stmt -> execute(["Hasan",'59']);

// $sql = "INSERT INTO people (fullname,age) values (:fullname,:age)";
// $stmt = $db -> prepare($sql);
// $stmt -> execute(["age" => 66, "fullname" => "Taghi"]);

// echoline("insert id: " . $db -> lastInsertId());

$sql = "INSERT INTO people (fullname,age,sex) values (?,?,?)";
$stmt = $db -> prepare($sql);
$users = [
    ["Sara",33,'f'],
    ["Changiz",44,'m'],
    ["Ahmad",32,'m']
];

$db -> beginTransaction(); # makes sure the transaction is fully functional
foreach($users as $user) {
    $stmt -> execute($user);
    if ($user[0] = "Changiz") {
        exit();
    }
}
$db -> commit(); # it closes the transaction    