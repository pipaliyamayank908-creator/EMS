 <?php
session_start();
include "connection.php";
include "navbar.php";

if (!isset($_SESSION['user'])) {
    die("Login first");
}
//session used user
$user_id = $_SESSION['user'];

//query
$sql = "SELECT * FROM emp WHERE user_id = '$user_id'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Employee List</h2>

 <div class="d-flex justify-content-end">
    <a href="add-employee.php" class="btn btn-success mb-3">
        Add New Employee
    </a>
</div>

<table class="table table-bordered">
<tr>
<th>ID</th>
<!-- <th>User_id</th> -->
<th>Name</th>
<th>Phone</th>
<th>City</th>
<th>Salary</th>
<th>Gender</th>
<th>Code</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?= $row['id']; ?></td>
<!-- <td><?= $row['user_id']; ?></td> -->
<td><?= $row['name']; ?></td>
<td><?= $row['phone']; ?></td>
<td><?= $row['city']; ?></td>   
<td><?= $row['salary']; ?></td>
<td><?php
if($row['gender'] == 0){
    echo("Male");
}elseif($row['gender'] == 1){
    echo("Female");
}else{
    echo("other");
}
?></td>
<td><?= $row['code']; ?></td>
 
<td>
<a href="view-employee.php?id=<?= $row['id']; ?>" 
   class="btn btn-primary btn-sm">
   View
</a>
 
</td>
</tr>
 
<?php } ?>
 

</table>
<a href="dash.php" class="btn btn-secondary">Back to Dashboard</a>
 
</div>
</body>
</html>