<?php
session_start();

// Add to cart
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    
    // Initialize cart if not exists
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    
    // Check if item already in cart
    $found = false;
    foreach($_SESSION['cart'] as &$item) {
        if($item['id'] == $id) {
            $item['qty']++;
            $found = true;
            break;
        }
    }
    
    // Add new item if not found
    if(!$found) {
        $_SESSION['cart'][] = array(
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'qty' => 1
        );
    }
}

// Remove from cart
if(isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    foreach($_SESSION['cart'] as $key => $item) {
        if($item['id'] == $remove_id) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

// Update quantity
if(isset($_POST['update'])) {
    $cart_id = $_POST['cart_id'];
    $qty = $_POST['qty'];
    if($qty > 0) {
        $_SESSION['cart'][$cart_id]['qty'] = $qty;
    }
}

$conn = mysqli_connect("localhost", "root", "", "fashion");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Shopping Cart - Urban Vouge</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style>
body {
    background: #f5f5f5;
}
.cart-container {
    background: white;
    padding: 30px;
    border-radius: 8px;
    margin: 30px 0;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.cart-table {
    width: 100%;
    border-collapse: collapse;
}
.cart-table th {
    background: #333;
    color: white;
    padding: 15px;
    text-align: left;
}
.cart-table td {
    padding: 15px;
    border-bottom: 1px solid #ddd;
}
.remove-btn {
    background: #ff4d6d;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.remove-btn:hover {
    background: #d63447;
}
.qty-input {
    width: 60px;
    padding: 5px;
    border: 1px solid #ddd;
}
.price-summary {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
}
.summary-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    font-size: 16px;
}
.summary-row.total {
    font-size: 20px;
    font-weight: bold;
    border-top: 2px solid #333;
    padding-top: 15px;
    color: #ff4d6d;
}
.checkout-btn {
    background: #28a745;
    color: white;
    padding: 15px 40px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
}
.checkout-btn:hover {
    background: #218838;
}
.empty-cart {
    text-align: center;
    padding: 40px;
    color: #666;
}
.continue-shopping {
    display: inline-block;
    background: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    margin-top: 20px;
}
</style>
</head>
<body>

<!-- Header -->
<div class="top-header about-header">
    <h1><a href="index.php">Urban Vouge<span>+</span></a></h1>
</div>

<div class="header">
    <div class="fixed-header">
        <div class="container">
            <div class="top-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Collections</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="portfolio.php">Products</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Cart Section -->
<div class="container">
    <div class="cart-container">
        <h2>🛒 Shopping Cart</h2>
        
        <?php if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0): ?>
            <div class="empty-cart">
                <h3>Your cart is empty</h3>
                <p>Start shopping to add items to your cart</p>
                <a href="about.php" class="continue-shopping">Continue Shopping</a>
            </div>
        <?php else: ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $subtotal = 0;
                    foreach($_SESSION['cart'] as $key => $item): 
                        $item_total = $item['price'] * $item['qty'];
                        $subtotal += $item_total;
                    ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td>₹<?php echo $item['price']; ?></td>
                        <td>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="cart_id" value="<?php echo $key; ?>">
                                <input type="number" name="qty" value="<?php echo $item['qty']; ?>" min="1" max="10" class="qty-input">
                                <button type="submit" name="update" style="padding: 5px 10px; background: #007bff; color: white; border: none; cursor: pointer;">Update</button>
                            </form>
                        </td>
                        <td>₹<?php echo $item_total; ?></td>
                        <td>
                            <a href="cart.php?remove=<?php echo $item['id']; ?>" class="remove-btn">Remove</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Price Summary -->
            <div class="price-summary">
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span>₹<?php echo $subtotal; ?></span>
                </div>
                <div class="summary-row">
                    <span>Shipping:</span>
                    <span>₹100</span>
                </div>
                <div class="summary-row">
                    <span>Tax (10%):</span>
                    <span>₹<?php echo number_format(($subtotal + 100) * 0.1, 2); ?></span>
                </div>
                <div class="summary-row total">
                    <span>Total Price:</span>
                    <span>₹<?php echo number_format($subtotal + 100 + (($subtotal + 100) * 0.1), 2); ?></span>
                </div>
            </div>

            <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
            <a href="about.php" class="continue-shopping">Continue Shopping</a>

        <?php endif; ?>
    </div>
</div>

<!-- Footer -->
<div class="footer" style="margin-top: 50px;">
    <div class="container">
        <p>&copy; 2026 Urban Vouge All rights reserved</p>
    </div>
</div>

</body>
</html>
