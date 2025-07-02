<?php
require 'connect.php';
$result = $conn->query("SELECT * FROM appointments ORDER BY booked_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin - Appointments</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f7f7f7;
      padding: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }
    th {
      background-color: #c2185b;
      color: white;
    }
    h2 {
      margin-bottom: 20px;
      color: #c2185b;
    }
  </style>
</head>
<body>
  <h2>💅 Admin Dashboard - Appointments</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Service</th>
      <th>Date</th>
      <th>Time</th>
      <th>Booked At</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['service'] ?></td>
      <td><?= $row['date'] ?></td>
      <td><?= $row['time'] ?></td>
      <td><?= $row['booked_at'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
