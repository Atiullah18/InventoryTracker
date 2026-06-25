<!DOCTYPE html>
<html>
<head>
    <title>Inventory Tracker System</title>

    <style>

    body{
        margin:0;
        font-family:Arial, sans-serif;
        background:#f4f4f4;
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:100vh;
    }

    .home-container{
        width:1000px;
        background:white;
        padding:40px;
        border-radius:15px;
        box-shadow:0 0 20px rgba(0,0,0,0.15);
        text-align:center;
    }

    .home-title{
        font-size:55px;
        font-weight:bold;
        margin-bottom:35px;
        color:#222;
    }

    .top-buttons{
        display:flex;
        justify-content:center;
        gap:20px;
        margin-bottom:30px;
    }

    .top-btn{
        background:#3b82f6;
        color:white;
        text-decoration:none;
        padding:18px 35px;
        border-radius:10px;
        font-size:24px;
        font-weight:bold;
        transition:0.3s;
    }

    .top-btn:hover{
        background:#2563eb;
    }

    hr{
        margin:30px 0;
        border:1px solid #eee;
    }

    .card-section{
        display:flex;
        justify-content:center;
        gap:30px;
    }

    .card{
        width:320px;
        padding:35px;
        border-radius:15px;
        background:#f8fbff;
        border:1px solid #dbeafe;
        transition:0.3s;
    }

    .card:hover{
        transform:translateY(-5px);
        box-shadow:0 5px 20px rgba(0,0,0,0.15);
    }

    .green{
        background:#f6fff6;
        border:1px solid #d4f4d4;
    }

    .icon{
        font-size:70px;
        margin-bottom:15px;
    }

    .card h3{
        font-size:32px;
        color:#2563eb;
    }

    .green h3{
        color:#16a34a;
    }

    .card p{
        font-size:20px;
        line-height:1.6;
        color:#444;
    }

    .card-btn{
        display:inline-block;
        margin-top:20px;
        padding:15px 25px;
        background:#3b82f6;
        color:white;
        text-decoration:none;
        border-radius:8px;
        font-size:20px;
    }

    .green .card-btn{
        background:#16a34a;
    }

    .footer{
        margin-top:40px;
        color:gray;
        font-size:16px;
    }

    </style>
</head>

<body>

<div class="home-container">

    <h1 class="home-title">
        Inventory Tracker System
    </h1>

    <div class="top-buttons">

        <a href="add_product.php" class="top-btn">
            ➕ Add Product
        </a>

        <a href="view_products.php" class="top-btn">
            📋 View Products
        </a>

    </div>

    <hr>

    <div class="card-section">

        <div class="card">

            <div class="icon">📦</div>

            <h3>Add Product</h3>

            <p>
                Add new products to the inventory with their details.
            </p>

            <a class="card-btn" href="add_product.php">
                Go to Add Product
            </a>

        </div>

        <div class="card green">

            <div class="icon">📋</div>

            <h3>View Products</h3>

            <p>
                View all products available in the inventory.
            </p>

            <a class="card-btn" href="view_products.php">
                Go to View Products
            </a>

        </div>

    </div>

    <div class="footer">
        Inventory Tracker System | Internship Project 2026
    </div>

</div>

</body>
</html>