<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
$id = $_GET["id"]
$conn->query("DELETE FROM admins WHERE id=$id")
header("Location: showadmin.php"); // Redirect after deletion
?>
