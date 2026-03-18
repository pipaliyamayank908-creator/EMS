 <?php
session_start();
include "connection.php";
include "navbar.php";

if (!isset($_SESSION['user'])) {
    die("Login first");
}

$user_id = $_SESSION['user'];

if (isset($_POST['submit'])) {

    $name   = $_POST['name'];
    $phone  = $_POST['phone'];
    $city   = $_POST['city'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
 
    if ($gender == "Male") {
        $gender = 0;
    } elseif ($gender == "Female") {
        $gender = 1;
    } else {
        $gender = 2;
    }

    $code = rand(1, 99999);

   
    $sql = "INSERT INTO emp (user_id, name, phone, city, salary, gender, code)
            VALUES ('$user_id','$name','$phone','$city','$salary','$gender','$code')";

    if ($conn->query($sql) === TRUE) {
        header("Location: employee-list.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Form</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 mb-5">

  <div class="card shadow p-4 mx-auto" style="max-width: 720px;">
    <h4 class="text-center mb-4">Add Employee</h4>

    <form action="" method="POST" >

      <div class="row">

       
        <div class="col-md-6 mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>

         
        <div class="col-md-6 mb-3">
          <label class="form-label">Phone</label>
          <input type="tel" name="phone" class="form-control"
                   required>
        </div>

       
        <div class="col-md-6 mb-3">
          <label class="form-label">City</label>
          <select name="city" class="form-select" required>
            <option value="">Choose City</option>
            <option>Surat</option>
            <option>Vadodara</option>
            <option>Rajkot</option>
          </select>
        </div>

       
        <div class="col-md-6 mb-3">
          <label class="form-label">Salary (₹)</label>
          <input type="number" name="salary" class="form-control" required>
        </div>

       
        <div class="col-12 mb-3">
          <label class="form-label d-block">Gender</label>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" required>
            <label class="form-check-label">Male</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female">
            <label class="form-check-label">Female</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Other">
            <label class="form-check-label">Other</label>
          </div>
          
        </div>

         

    
      <button  type="submit" name="submit" class="btn btn-primary w-100" >
        Add Employee
      </button>
      
    </form>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>