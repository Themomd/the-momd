<?php
include_once "01-connection.php";

// $_POST , $_GET
$sex_array = ['m','f'];
$UserData = array(
    'fullname' => "Mohamad" . rand(100,99),
    'age' => 30 . rand(10,100),
    'sex' => $sex_array[rand(0,1)],
    'isSingle' => rand(0,1)
);

# unsafe query

// $sql = "insert into people
// (fullname,age,sex,isSingle)
// values ('{$UserData['fullname']}',{$UserData['age']},'{$UserData['sex']}',{$UserData['isSingle']})";

// if($mysqli -> query($sql)){    
//     echo "insert function executed". PHP_EOL;
// }else{
//     echo "insert function didn't executed!" . ($mysqli -> error)  . PHP_EOL;
// }

# echo $mysqli -> error; shows you the error.

function addUser($UserData){
    global $mysqli;
    $sql = "insert into people
    (fullname,age,sex,isSingle)
    values (?,?,?,?)";
    $stmt = $mysqli -> prepare($sql);
    $stmt -> bind_param('siib',$UserData['fullname'],$UserData['age'],$UserData['sex'],$UserData['isSingle']);
    $stmt -> execute();
    return $stmt -> insert_id;

}

$user_id = addUser(['fullname' => "Ahmad",'age' => 20, 'sex' => 'm', 'isSingle' => 1]);
echo "added user id is $user_id";


// # use prepare statement
// $sql = "insert into people
// (fullname,age,sex,isSingle)
// values (?,?,?,?)";
// $stmt = $mysqli -> prepare($sql);
// $stmt -> bind_param('siib',$UserData['fullname'],$UserData['age'],$UserData['sex'],$UserData['isSingle']);
// # siib means -> string,int,int,boolean!
// $stmt -> execute();
// $stmt -> close();
// # var_dump($stmt); -> you can find out about the function name
