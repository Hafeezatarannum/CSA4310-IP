<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "course_feedback";

// Connect to database
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$feedback = $_POST['feedback'];

// Prepare and insert data safely
$stmt = $conn->prepare("INSERT INTO feedbacks (name, email, course, feedback) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $course, $feedback);

if ($stmt->execute()) {
    echo "<h2>✅ Feedback Submitted</h2>";
    echo "Thank you, <strong>$name</strong>!<br>";
    echo "Your feedback for <strong>$course</strong> has been recorded.";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();   // Close statement
$conn->close();   // Close connection AFTER everything is done
?>
