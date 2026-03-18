<?php
session_start();
include "connection.php";
include "navbar.php";

if (!isset($_SESSION['user'])) {
      header("Location: login.php");
      exit();
}
 
$sql = "SELECT * FROM auth WHERE id='".$_SESSION['user']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td>******</td>
      </tr>
    </tbody>
  </table>
  <a href="dash.php" class="btn btn-secondary">Back to Dashboard</a>
</div>

</body>
</html>