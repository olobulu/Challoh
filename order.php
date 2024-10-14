<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $instructions = $_POST['instructions'];

    $to = "admin@veggieshop.com"; // Admin email
    $subject = "New Order from Veggie Shop";
    $message = "New order details:\n";
    $message .= "Delivery Address: $address\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Instructions: $instructions\n";
    $message .= "Items:\n";
    // Loop through cart items (add dynamically based on session/cart management)
    $message .= "Tomato, 2 kg, Total: $4\n";

    $headers = "From: no-reply@veggieshop.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Order placed successfully.";
    } else {
        echo "Error placing order.";
    }
}
