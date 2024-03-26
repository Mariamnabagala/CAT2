

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Selection</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <nav class="navbar">
    <div class="container">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href ="purchase.php">purchase</li>
        </ul>
    </div>
</nav>
    <p>Select an item to purchase:</p>
    <form action="processOrder.php" method="post">
        <select name="item" id="item" >
            <option value="Air force 1">$120 - Air force 1</option>
            <option value="Air force 4">$300 - Air force 4</option>
            <option value="Leather hand bags">$100 - Leather hand bags</option>
            <option value="Tote bags">$60 - Tote bags</option>
            <option value="Earing set(10 pcs)">$120 - Earing set(10 pcs)</option>
        </select>
        <select name="item" id="item" >
            <option value="Air force 1">$120 - Air force 1</option>
            <option value="Air force 4">$300 - Air force 4</option>
            <option value="Leather hand bags">$100 - Leather hand bags</option>
            <option value="Tote bags">$60 - Tote bags</option>
            <option value="Earing set(10 pcs)">$120 - Earing set(10 pcs)</option>
        </select>
        <br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1">
        <br><br>
        <button type="submit" id="cart">Add to Cart</button>
    </form>
      <div id="cart">
        <h2>Your Cart</h2>
        <?php
        session_start();
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<p>{$item['quantity']} x {$item['item']}</p>";
            }
        } else {
            echo "<p>Your cart is empty.</p>";
        }
        ?>
        <a href="checkout.php">View Cart</a>
    </div>
</body>
</html>

