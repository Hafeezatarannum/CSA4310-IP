<?php
require 'connection.php'; // Include the DB connection

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$cake_type = $_POST['cake_type'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO orders (name, phone, email, cake_type, quantity, message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $name, $phone, $email, $cake_type, $quantity, $message);

if ($stmt->execute()) {
  echo "<h2>🎉 Order Placed Successfully!</h2>";
  echo "<p>Thank you, <strong>$name</strong>. Your $cake_type cake(s) are being prepared.</p>";
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
