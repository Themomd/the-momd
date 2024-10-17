<?php

$mysqli = new mysqli("localhost","root","","user");

if($mysqli -> connect_errno){
    echo "faild to connect to mysql! error: ". $mysqli -> connect_error;
    exit;
}

# connection is ok.
echo "Successfully Connected to Mysql.". PHP_EOL;

$mysqli -> set_charset('utf8');

$userData = [
    "username" => "Mohamad",
    "password" => "lajsflkb"
];

$table = "
    CREATE TABLE USER(
    username varchar(256) NOT NULL,
    password varchar(256) NOT NULL,
    PRIMARY KEY (username)
);";

if($mysqli -> query($table)){
    echo "table created" . PHP_EOL;
}else{
    echo "table didn't created" . ($mysqli -> error) . PHP_EOL;
}

$sql = "
    INSERT INTO user(username,password)
    values (?,?)";

$stm = $mysqli -> prepare($sql);
$stm -> bind_param('ss',$userData['username'],$userData['password']);
$stm -> execute();
$stm -> close();