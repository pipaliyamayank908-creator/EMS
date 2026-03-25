 <?php
session_start();
include "connection.php";

// Check login
if (!isset($_SESSION['user'])) {
    die("Access denied. Please login first.");
}

// Logged in user
$user_id = $_SESSION['user'];

// Check employee id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid request. No ID provided.");
}

$id = (int) $_GET['id'];

// Delete only that employee which belongs to logged in user
$stmt = $conn->prepare("DELETE FROM emp WHERE id = ? AND user_id = ?");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// id = integer, user_id = string
$stmt->bind_param("is", $id, $user_id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "<script>
                alert('Employee deleted successfully');
                window.location='employee-list.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Employee not found or unauthorized');
                window.location='employee-list.php';
              </script>";
        exit();
    }
} else {
    echo "Execution failed: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>