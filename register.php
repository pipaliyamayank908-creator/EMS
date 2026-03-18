<?php
include "navbar.php";
include "connection.php";


if (isset($_POST['submit'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass  = $_POST['password'];
    $cpass = $_POST['confirm_password'];

    if ($pass !== $cpass) {
        die("Passwords do not match");
    }

    
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO auth (name, email, phone, password)
            VALUES ('$name', '$email', '$phone', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>
<body>
   

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="width: 450px;">
    
    <h3 class="text-center mb-4">Register User</h3>

    <form action="register.php" method="POST">

      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input 
          type="text" 
          name="name" 
          class="form-control" 
          placeholder="Enter your full name"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input 
          type="email" 
          name="email" 
          class="form-control" 
          placeholder="Enter your email"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label">Phone</label>
        <input 
          type="text" 
          name="phone" 
          class="form-control" 
          placeholder="Enter your phone number"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input 
          type="password" 
          name="password" 
          class="form-control" 
          placeholder="Create password"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input 
          type="password" 
          name="confirm_password" 
          class="form-control" 
          placeholder="Confirm password"
          required>
      </div>
      
      <div class="d-grid mb-3">
        <button type="submit" name="submit" class="btn btn-success">
          Register
        </button>
      </div>

      <div class="text-center">
        Already have an account? 
        <a href="login.php" class="text-decoration-none">
          Login Now
        </a>
      </div>

    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
