<?php
require 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$room_type = $_POST['room_type'];
$guests = $_POST['guests'];
$requests = $_POST['requests'];

$sql = "INSERT INTO bookings (
    name, email, checkin, checkout, room_type, guests, requests
) VALUES (
    '$name', '$email', '$checkin', '$checkout', '$room_type', '$guests', '$requests'
)";

if ($conn->query($sql) === TRUE) {
    echo \"<script>alert('Room booked successfully!'); window.location.href='index.html';</script>\";
} else {
    echo \"Error: \" . $conn->error;
}

$conn->close();
?>
