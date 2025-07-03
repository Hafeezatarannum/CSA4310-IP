<?php
include('php/connect.php');

// Handle product insertion
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_product'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_POST['image'];

  $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
  $conn->query($sql);
}

// Handle product deletion
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "DELETE FROM products WHERE id=$id";
  $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Gadget Store</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Admin Panel</h1>

  <h2>Add New Product</h2>
  <form method="POST" action="">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="text" name="price" placeholder="Price" required>
    <input type="text" name="image" placeholder="Image URL" required>
    <button type="submit" name="add_product">Add Product</button>
  </form>

  <h2>Product List</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price (₹)</th>
      <th>Image</th>
      <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM products");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>₹{$row['price']}</td>
              <td><img src='{$row['image']}' width='60'></td>
              <td><a href='admin.php?delete={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>
