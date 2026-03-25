<?php
include('connection.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("No ID provided");
}

$id = (int) $_GET['id'];

// Fetch old employee data
$sql = "SELECT * FROM emp WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Employee not found");
}

$row = $result->fetch_assoc();

// Update data
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $phone  = $_POST['phone'];
    $city   = $_POST['city'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];

    $update = "UPDATE emp 
               SET name='$name', phone='$phone', city='$city', salary='$salary', gender='$gender' 
               WHERE id=$id";

    if ($conn->query($update) === TRUE) {
        echo "<script>alert('Employee updated successfully'); window.location='employee-list.php';</script>";
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
  <title>Update Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 mb-5">
  <div class="card shadow p-4 mx-auto" style="max-width: 720px;">
    <h4 class="text-center mb-4">Update Employee</h4>

    <form action="" method="POST">
      <div class="row">

        <div class="col-md-6 mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Phone</label>
          <input type="tel" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" required>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">City</label>
          <select name="city" class="form-select" required>
            <option value="">Choose City</option>
            <option value="Surat" <?php if($row['city']=="Surat") echo "selected"; ?>>Surat</option>
            <option value="Vadodara" <?php if($row['city']=="Vadodara") echo "selected"; ?>>Vadodara</option>
            <option value="Rajkot" <?php if($row['city']=="Rajkot") echo "selected"; ?>>Rajkot</option>
          </select>
        </div>

        <div class="col-md-6 mb-3">
          <label class="form-label">Salary (₹)</label>
          <input type="number" name="salary" class="form-control" value="<?php echo $row['salary']; ?>" required>
        </div>

        <div class="col-12 mb-3">
          <label class="form-label d-block">Gender</label>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" <?php if($row['gender']=="Male") echo "checked"; ?> required>
            <label class="form-check-label">Male</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female" <?php if($row['gender']=="Female") echo "checked"; ?>>
            <label class="form-check-label">Female</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Other" <?php if($row['gender']=="Other") echo "checked"; ?>>
            <label class="form-check-label">Other</label>
          </div>
        </div>

        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary w-100">
            Update Employee
          </button>
        </div>

      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>