<?php

include_once "01-connection.php";

$user_id = 6;

$sql = " DELETE from people where id = ?";

// $stm = $mysqli -> prepare($sql);
// $stm -> bind_param('i',$user_id);
// $stm -> execute();


// print_r($stm);
// $stm -> close();

// $sql = " DELETE from people where sex = 'm'";
// $stm = $mysqli -> prepare($sql);
// # after first atempt you don't need to use bind_param
// $stm -> execute();

// print_r($stm);
// $stm -> close();

# when you don't have an outside input, it can be safe to just use query without prepare()

$sql = " DELETE from people where id > 7";
if($mysqli -> query($sql)){    
    echo $mysqli -> affected_rows, " Records has been sucessfully DELETED". PHP_EOL;
}else{
    echo "FAILD TO DELETE!" . PHP_EOL;
}

