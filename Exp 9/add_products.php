<?php
include 'connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];

$sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
if ($conn->query($sql) === TRUE) {
  echo "Product added.";
} else {
  echo "Error: " . $conn->error;
}
?>
