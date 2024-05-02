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

// Insert product into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $categoryName = $_POST['categoryName'];
    $price = $_POST['price'];

    // Upload product image
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
    move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file);

    // Insert data into database
    $sql = "INSERT INTO products (productName, categoryName, productImage, price)
            VALUES ('$productName', '$categoryName', '$target_file', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<?php
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