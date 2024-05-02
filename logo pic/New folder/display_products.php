<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Product Name</th><th>Category Name</th><th>Product Image</th><th>Price</th><th>Edit</th><th>Delete</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['productName'] . "</td>";
        echo "<td>" . $row['categoryName'] . "</td>";
        echo "<td><img src='" . $row['productImage'] . "' style='max-width: 100px;'></td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td><a href='edit_product.php?id=" . $row['id'] . "'>Edit</a></td>";
        echo "<td><a href='delete_product.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
