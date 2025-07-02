<?php
require 'connect.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (name, phone, email, service, date, time)
        VALUES ('$name', '$phone', '$email', '$service', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Appointment booked successfully!'); window.location.href='index.html';</script>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
