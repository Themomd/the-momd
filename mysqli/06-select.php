<?php
include_once "01-connection.php";

$sql = "SELECT id,fullname,age from people where id >= 7";
$result = $mysqli -> query($sql);

// print_r($result->fetch_all()); => it gives you all rows in one indexed array
// print_r($result->fetch_assoc()); => it gives you one row in an associative array

# when you use fetch_assoc in a loop, it gives you every row in an associative array
// while($row = $result->fetch_assoc()){
//     print_r($row);
// }

echo "<table>";

# if you use fetch_object it returns the table in object class
// while($row = $result->fetch_object()){
//     echo "<tr>";
//     foreach ($row as $key => $value) {
//         echo "<td>$value</td>";
//     }
//     echo "<tr>";
// }

// echo "</table>";

// $sql = "SELECT avg(age) as age_avg, count(*) as pop from people";
// $stm = $mysqli -> prepare($sql);
// $stm -> execute();
// $stm -> bind_result($age_avg,$pop); # => this $age_avg includes age_avg from query
// $stm -> fetch(); # it gives you $age_avg
// echo '<hr> Age avarage is: ' . $age_avg;
// echo '<hr> Population is: ' . $pop;

// $sql = "SELECT fullname,age from people";
// $stm = $mysqli -> prepare($sql);
// $stm -> execute();
// $stm -> bind_result($fullname,$age); # => this $age_avg includes age_avg from query
// // $stm -> fetch(); # it gives you $age_avg
// // echo '<hr> Fullname is: ' . $fullname;
// // echo '<hr> Age is: ' . $age;

// while ($stm -> fetch()) {
//     echo "<hr>$fullname : $age";
// }

$sql = "SELECT * from people";
$stm = $mysqli -> prepare($sql);
$stm -> execute();
$stm -> bind_result($id,$fullname,$age,$sex,$isSingle); # => number of the variables must match the number of the request in the query
// $stm -> fetch(); # it gives you $age_avg
// echo '<hr> Fullname is: ' . $fullname;
// echo '<hr> Age is: ' . $age;

while ($stm -> fetch()) {
    echo "<hr>$fullname : $age " . ($isSingle ? "single" : "married");
}

// $sql = "SELECT * from people";
// $stm = $mysqli -> prepare($sql);
// $stm -> execute();
// $stm -> store_result();
// echo $stm -> affected_rows;