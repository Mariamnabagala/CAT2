
<?php
session_start();

// Check if the cart session variable is set and not empty
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    // If cart is empty, display a message
    $cart = [];
    $message = "Your cart is empty.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <h1>Shopping Cart</h1>
    
    <?php if(isset($message)) { ?>
        <p><?php echo $message; ?></p>
    <?php } else { ?>
        <table>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
            </tr>
            <?php foreach($cart as $item) { ?>
                <tr>
                    <td><?php echo $item['item']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
    
    <br>
    <a href="purchase.php">Continue Shopping</a>
</body>
</html>
