<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bus_booking";

// Connect to database
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$seat = $_POST['seat'];

$stmt = $conn->prepare("INSERT INTO tickets (name, email, from_place, to_place, travel_date, seat) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $from, $to, $date, $seat);

if ($stmt->execute()) {
    echo "<h2>✅ Booking Confirmed</h2>";
    echo "Thank you, <strong>$name</strong>!<br>";
    echo "Your seat <strong>$seat</strong> from <strong>$from</strong> to <strong>$to</strong> on <strong>$date</strong> is booked.";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
