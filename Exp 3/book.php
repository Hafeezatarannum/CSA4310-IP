<?php
$name = $_POST['name'];
$email = $_POST['email'];
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$seat = $_POST['seat'];

echo "<h2>Booking Confirmation</h2>";
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "From: $from <br>";
echo "To: $to <br>";
echo "Date: $date <br>";
echo "Seat: $seat <br>";
echo "<br><strong>✅ Your ticket has been booked successfully!</strong>";
?>
