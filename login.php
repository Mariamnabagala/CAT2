<?php
session_start();
include 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and execute SQL query to fetch user data
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Password is correct, set session variables and redirect to profile page
                $_SESSION['username'] = $row['username'];
                header("Location: profile.php");
                exit; // Ensure script execution stops after redirection
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "User not found.";
        }
    } else {
        $error = "Please provide email and password.";
    }
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul>
                <li><a href="home.php">Home</a></li>
                
                <li><a href="login.php">Login</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
    </nav>

    <div class="container1">
        <h1>Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
    </div>
    <script src="script.js"></script>
</body>
</html>
