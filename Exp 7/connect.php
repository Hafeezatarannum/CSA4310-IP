<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "beauty_parlor";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
