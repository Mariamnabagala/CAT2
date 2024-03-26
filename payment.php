<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['payment'])) {
        $payment_method = $_POST['payment'];
        // You can further process the payment based on the selected method
        // For example, if payment method is "credit_card", you can redirect to a credit card payment page
        // If payment method is "paypal", you can redirect to a PayPal payment page, etc.
        // Redirect the user to the appropriate payment page based on the selected method
        switch ($payment_method) {
            case 'credit_card':
                header("Location: creditCardPayment.php");
                exit;
            case 'paypal':
                header("Location: paypalPayment.php");
                exit;
            // Add more cases for other payment methods
        }
    } else {
        echo "Please select a payment method.";
    }
} else {
    // Redirect the user back to the checkout page if accessed directly
    header("Location: checkout.php");
    exit;
}
?>
