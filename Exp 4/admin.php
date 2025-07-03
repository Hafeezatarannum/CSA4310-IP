<?php
require 'connect.php';
$result = $conn->query("SELECT * FROM bookings");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    table {
      border-collapse: collapse;
      width: 90%;
      margin: auto;
    }
    th, td {
      border: 1px solid #333;
      padding: 10px;
      text-align: center;
    }
    h2 {
      text-align: center;
      margin: 20px;
    }
    a {
      color: red;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h2>Train Booking Records</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>From</th>
      <th>To</th>
      <th>Date</th>
      <th>Class</th>
      <th>Tickets</th>
      <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['from_station'] ?></td>
      <td><?= $row['to_station'] ?></td>
      <td><?= $row['travel_date'] ?></td>
      <td><?= $row['class'] ?></td>
      <td><?= $row['tickets'] ?></td>
      <td><a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
