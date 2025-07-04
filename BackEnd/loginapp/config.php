<?php
$host = "localhost";          // from DBeaver
$user = "root";               // or your custom username
$password = "Samnan69@";               // set this if DBeaver uses a password
$db = "fitflex";              // your DB name
$port = 3306;                 // DBeaver/MySQL port

$conn = mysqli_connect($host, $user, $password, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
