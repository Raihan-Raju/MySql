<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Product Management</h2>
        <form action="insert_product.php" method="post" enctype="multipart/form-data">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required>
            <label for="categoryName">Category Name:</label>
            <input type="text" id="categoryName" name="categoryName" required>
            <label for="productImage">Product Image:</label>
            <input type="file" id="productImage" name="productImage" required>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
            <button type="submit">Add Product</button>
        </form>
        <div id="productTable">
            <?php include 'display_products.php'; ?>
        </div>
    </div>
</body>
</html>
