<?php
include 'config/db.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products
    (product_name, category, quantity, price)
    VALUES
    ('$name','$category','$quantity','$price')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Product Added Successfully!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">

<h2>📦Add Product</h2>

<form method="POST">

<input type="text" name="name" placeholder="Product Name" required>

<input type="text" name="category" placeholder="Category" required>

<input type="number" name="quantity" placeholder="Quantity" required>

<input type="number" step="0.01" name="price" placeholder="Price" required>

<button type="submit" name="submit">
    Add Product
</button>

</form>

<br>

<a class="card-btn" href="index.php">
🏠 Home
</a>

</div>

</body>
</html>