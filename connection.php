<?php
// Create connection
$test="";
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "ecom1_tp2";
$conn = mysqli_connect($server, $user, $pwd, $dbname);

if ($conn) {
    echo "Connected to the $dbname database successfully";
    global $conn;
    session_start();
    $_SESSION['connection']= $conn;
} else {
    echo "Error : Not connected to the $dbname database";
}
?> 
<form method="post" action="validation.php">
<button type="submit">Confirm</button>