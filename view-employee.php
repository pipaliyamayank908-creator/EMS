<?php
include "connection.php";
include "navbar.php";

 
if (!isset($_GET['id'])) {
    die("Invalid Request: ID missing");
}

$id = (int) $_GET['id'];
 

    
$query = "SELECT * FROM emp WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Employee not found");
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Employee</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h3 class="mb-4">Employee Details</h3>

<table class="table table-bordered">

<tr><th>ID</th><td><?= $row['id']; ?></td></tr>
<tr><th>Name</th><td><?= $row['name']; ?></td></tr>
<tr><th>Phone</th><td><?= $row['phone']; ?></td></tr>
<tr><th>City</th><td><?= $row['city']; ?></td></tr>
<tr><th>Salary</th><td><?= $row['salary']; ?></td></tr>
<tr><th>Gender</th><td> <?php
if($row['gender'] == 0){
    echo("Male");
}elseif($row['gender'] == 1){
    echo("Female");
}else{
    echo("other");
}
?></td></tr>
<tr><th>Code</th><td><?= $row['code']; ?></td></tr>

</table>

<a href="employee-list.php" class="btn btn-secondary">Back to List</a>

</div>
</div>

</body>
</html>