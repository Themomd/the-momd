<?php 

$mysqli = new mysqli("localhost","root","","users");

if($mysqli -> connect_errno){
    echo "faild to connect to mysql! error: ". $mysqli -> connect_error;
    exit;
}

# connection is ok.
echo "Successfully Connected to Mysql.". PHP_EOL;


$mysqli -> set_charset('utf8');

// $userId = 5;
// $sql = "DELETE from products where id = ?";
// $stm = $mysqli -> prepare($sql);
// $stm -> bind_param('i',$userId);
// $stm -> execute();

$sql = "UPDATE products SET price = 20 where price < 50";
if($mysqli -> query($sql)){    
    echo $mysqli -> affected_rows, " Records has been sucessfully UPDATED". PHP_EOL;
}else{
    echo "FAILD TO UPDATE!" . PHP_EOL;
}
