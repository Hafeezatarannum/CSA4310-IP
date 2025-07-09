<?php
include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];

// SQL INSERT query
$sql = "INSERT INTO feedbacks (name, email, course, feedback)
        VALUES ('$name', '$email', '$course', '$feedback')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "<h2>✅ Feedback Submitted</h2>";
    echo "Thank you, <strong>$name</strong>!<br>";
    echo "Your feedback for <strong>$course</strong> has been recorded.";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}

// Close the connection
$conn->close();
?>
