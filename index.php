<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Lost & Found Form</title>
</head>
<body>
    <div class="navbar">
    <div class="logo">Lost & Found</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="view_items.php">View Items</a>
        <a href="#">Contact</a>
    </div>
</div>
<h1 class="main-title">Lost & Found Item Form</h2>
    <div class="container">
    <form action="insert.php" method="POST">
        <label>Item Name:</label><br>
        <input type="text" name="item_name" required><br><br>

        <label>Description:</label><br>
        <input type="text" name="description" required><br><br>

        <label>Location:</label><br>
        <input type="text" name="location" required><br><br>

        <label>Contact Number:</label><br>
        <input type="text" name="contact_number" required><br><br>

        <label>Date Found:</label><br>
        <input type="date" name="date_found" required><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>