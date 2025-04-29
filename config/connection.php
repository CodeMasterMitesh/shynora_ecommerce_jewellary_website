<?php

$dbhost = "localhost";
$dbuser = "root";
$dbname = "shynora_jewellary_db";
$dbpass = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn){
    echo "Connected";
}else{
    echo "Error";
}


?>