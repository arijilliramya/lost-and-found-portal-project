<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db.php";
$item_name = $_POST['item_name'];
$description=$_POST['description'];
$location  = $_POST['location'];
$contact  = $_POST['contact_number'];
$date_found  = $_POST['date_found'];
$sql = "INSERT INTO items (item_name,description,location,contact_number,date_found)
        VALUES ('$item_name','$description','$location','$contact','$date_found')";

if (mysqli_query($conn, $sql)) {
    echo "Item added successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
