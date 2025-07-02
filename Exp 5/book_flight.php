<?php
require 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$from = $_POST['departure'];
$to = $_POST['destination'];
$depart_date = $_POST['depart_date'];
$return_date = $_POST['return_date'];
$flight_class = $_POST['flight_class'];

$sql = "INSERT INTO reservations (name, email, departure, destination, depart_date, return_date, flight_class)
        VALUES ('$name', '$email', '$from', '$to', '$depart_date', '$return_date', '$flight_class')";

if ($conn->query($sql) === TRUE) {
  echo "Booking successful!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
