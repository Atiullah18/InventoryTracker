<?php
include 'config/db.php';

$result = mysqli_query($conn,"SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        th{
            background:#007bff;
            color:white;
            padding:12px;
        }

        td{
            padding:12px;
            text-align:center;
            border:1px solid #ddd;
        }

        .delete-btn{
            color:red;
            text-decoration:none;
            font-weight:bold;
        }
    </style>

</head>
<body>

<div class="container">

<h2>📋Product List</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['product_name']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['quantity']; ?></td>

<td>₹<?php echo number_format($row['price'],2); ?></td>

<td>
<a class="delete-btn"
onclick="return confirm('Are you sure you want to delete this product?')"
href="delete_product.php?id=<?php echo $row['id']; ?>">
🗑 Delete
</a>
</td>

</tr>
<?php
}
?>

</table>

<br>

<a class="card-btn" href="index.php">
🏠 Home
</a>

</div>

</body>
</html>