<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lost_and_found";

$conn = mysqli_connect("localhost","root","","lost_and_found");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
