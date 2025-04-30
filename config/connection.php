<?php
 error_reporting( E_ALL );
 ini_set('display_errors', '1');
$dbhost = "localhost";
$dbuser = "root";
$dbname = "shynora_jewellary_db";
$dbpass = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn){
    // echo "Connected";
}else{
    echo "Error";
}


?>