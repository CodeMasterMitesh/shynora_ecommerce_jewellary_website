<?php
session_start();
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

<!-- In PHP, a session is a mechanism that allows you 
to store user-specific data across multiple pages of a website. 
This data is stored on the server, not the user's browser, 
and is accessed using a unique session ID. Sessions are crucial 
for maintaining user state and tracking information about a user's visit to a website. 

Yes, session IDs are typically stored in a user's browser, most commonly as a cookie. 
When a server creates a session, it assigns a unique session ID and sends it to the user's browser in a cookie. 
This cookie is then used by the browser to include the session ID in subsequent requests to the server. 
-->