<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM items");
?>

<h2>Lost & Found Items</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Item Name</th>
    <th>Description</th>
    <th>Location</th>
    <th>Contact</th>
    <th>Date Found</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['item_name']}</td>
        <td>{$row['description']}</td>
        <td>{$row['location']}</td>
        <td>{$row['contact_number']}</td>
        <td>{$row['date_found']}</td>
    </tr>";
}
?>
</table>