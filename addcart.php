<?php
include './settings/core.php';
include './settings/connection.php';
include './functions/get_services.php';
checkLogin();
if($_SESSION['role_id']!=2){
	header('Location: admin.php');
	exit;
}
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <title>Shopping Cart</title>
    <style>
        /* Styles for the cart items */
        .cart-item {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        
        .cart-item img {
            width: 100px;
            margin-right: 20px;
        }
        
        .cart-item h4 {
            margin: 0;
        }
        
        /* Styles for the cart total */
        .cart-total {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <!-- Cart items -->
    <div class="cart-items">
        <!-- Sample cart item, replace with dynamically generated items -->
        <div class="cart-item">
            <img src="image-url" alt="Product Image">
            <div>
                <h4>Product Name</h4>
                <p>Price: $10.99</p>
                <p>Quantity: 1</p>
            </div>
        </div>
        <!-- Sample cart item ends -->
    </div>
    <!-- Cart total -->
    <div class="cart-total">
        <h3>Total: $10.99</h3>
        <button>Checkout</button>
    </div>
</body>
</php>
