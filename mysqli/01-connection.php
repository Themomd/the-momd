<?php

$mysqli = new mysqli("localhost","root","","world");

if($mysqli -> connect_errno){
    echo "faild to connect to mysql! error: ". $mysqli -> connect_error;
    exit;
}

# connection is ok.
echo "Successfully Connected to Mysql.". PHP_EOL;

$mysqli -> set_charset('utf8'); # cuz of farsi inputs

// print_r($mysqli); # cuz you don't know what is in this object and print_r will help, this info will help you to find out about any error given
// var_dump($mysqli -> affected_rows);