<?php
$host = "localhost";
$username = "root";
$password = ""; // your MySQL password
$dbname = "hospital_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$disease = $_POST['dob'];
$doctor = $_POST['phone'];

$sql = "INSERT INTO patients (name, age, gender, disease, doctor)
        VALUES ('$name', '$age', '$gender', '$disease', '$doctor')";

if ($conn->query($sql) === TRUE) {
    echo "Patient record added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<p><a href="index.html" target="_blank">back</a></p>
