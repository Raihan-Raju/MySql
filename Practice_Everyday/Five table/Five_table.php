<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice_table"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to select data from details_of_products view
$sql = "SELECT * FROM details_of_products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Data from details_of_products</h2>";
    echo "<table border='1'><tr>";

    // Output table column headers
    $field_info = $result->fetch_fields();
    foreach ($field_info as $field) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";

    // Output table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>{$cell}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert Form</title>
</head>
<body>
    <h2>Data Insert Form</h2>
    <form action="insert_data.php" method="POST">
        <!-- Customer Information -->
        <label for="customer_name">Customer Name:</label><br>
        <input type="text" id="customer_name" name="customer_name"><br>
        
        <!-- Order Information -->
        <label for="order_date">Order Date:</label><br>
        <input type="date" id="order_date" name="order_date"><br>
        
        <!-- Product Information -->
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name"><br>
        
        <!-- Order Item Information -->
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity"><br>
        
        <!-- Order Status Information -->
        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
