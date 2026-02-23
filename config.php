<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP default
$database = "hospital"; // ab database exist karta hai

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
