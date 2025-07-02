<?php
require 'connect.php';
$result = $conn->query("SELECT * FROM reservations ORDER BY booked_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin - View Bookings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background: #f0f4f8;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }
    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }
    th {
      background-color: #0077b6;
      color: white;
    }
  </style>
</head>
<body>
  <h2>✈ Flight Bookings - Admin Panel</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>From</th>
      <th>To</th>
      <th>Depart</th>
      <th>Return</th>
      <th>Class</th>
      <th>Booked At</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['departure'] ?></td>
      <td><?= $row['destination'] ?></td>
      <td><?= $row['depart_date'] ?></td>
      <td><?= $row['return_date'] ?></td>
      <td><?= $row['flight_class'] ?></td>
      <td><?= $row['booked_at'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
