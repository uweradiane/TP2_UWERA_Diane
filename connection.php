<?php
// Create connection
$test='';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1_tp2";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    echo "Connected to the $dbname database successfully";
    global $conn;
    session_start();
    $_SESSION['connexion']= $conn;
} else {
    echo "Error : Not connected to the $db database";
}
?> 
<form method="post" action="usercrud.php">
<button type="submit">Confirm</button>