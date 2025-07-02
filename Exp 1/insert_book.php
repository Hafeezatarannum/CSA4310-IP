<?php
require 'connect.php';

$title = $_POST['title'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$category = $_POST['category'];

$sql = "INSERT INTO books (title, author, isbn, category)
        VALUES ('$title', '$author', '$isbn', '$category')";

if ($conn->query($sql) === TRUE) {
  echo "Book added successfully";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
