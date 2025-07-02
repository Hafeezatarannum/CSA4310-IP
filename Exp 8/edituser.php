<?php
$conn = new mysqli("localhost", "root", "", "connection");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
  $id = $_GET["id"];
  $result = $conn->query("SELECT * FROM account WHERE id=$id");
  $row = $result->fetch_assoc();
}
?>

<h2>Edit User</h2>
<form method="post">
  <input type="hidden" name="id" value="<?= $row['id'] ?>">
  First Name: <input type="text" name="firstname" value="<?= $row['firstname'] ?>"><br>
  User Name: <input type="text" name="username" value="<?= $row['username'] ?>"><br>
  Pass word: <input type="text" name="password" value="<?= $row['password'] ?>"><br>
  <input type="submit" value="Update">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $id = $_POST["id"];
  $firstname = $_POST["firstname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $conn->query("UPDATE account SET firstname='$firstname', username='$username', password='$password' WHERE id=$id");
  header("Location: showph.php");
}
?>
