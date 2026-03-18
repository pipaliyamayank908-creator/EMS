 <?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="dash.php">My Dashboard</a>

    <div class="ms-auto">
      <span class="text-white me-3">
        Welcome <?php echo $_SESSION['user']; ?>
      </span>

     
      <a href="employee-list.php" class="btn btn-success btn-sm">Employee</a>
      <a href="profile.php" class="btn btn-success btn-sm">Profile</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>

 
<div class="container mt-5">

  <h2 class="mb-4">Dashboard Overview</h2>

  <div class="row">

     
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">User Profile</h5>
          <p class="card-text">View your personal details.</p>
          <a href="profile.php" class="btn btn-primary">Open User Profile</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Employee Profile</h5>
          <p class="card-text">View your personal details.</p>
          <a href="employee-list.php" class="btn btn-primary">Open Employee Profile</a>
        </div>
      </div>
    </div>

    

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
</head>
<body>
  <h1>Welcome <?php echo $_SESSION['user']; ?></h1>
<a href="logout.php">Logout</a>


<a href="profile.php">User Profile</a>

   
       
         
         
</body>
</html> -->