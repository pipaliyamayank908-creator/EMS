<?php
include "navbar.php";
session_start();
include "connection.php";
 
if (isset($_SESSION['user'])) {
    header("Location: dash.php");
    exit();
}
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $sql = "SELECT * FROM auth WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        
        if (password_verify($pass, $row['password'])) {
// create a session in login session name user 
            $_SESSION['user'] = $row['id'];


           if(isset($_POST['remember'])){
            //store email and password in one variable  using cookies concept 
                 $user_data = [
                        "email" => $email,
                        "password" => $pass 
                          ];
                  setcookie(
                    "user_data",
                    json_encode($user_data),
                    time()+60*60*24*30, 
                    "/"
                  );
                  }else{
                      setcookie("user_data","",time()-3600,"/");
                  }
                              header("Location: dash.php");
                              exit();

                          } else {
                              $error = "Wrong password";
                          }

                      } else {
                          $error = "User not found";
                      }
                  }
                   
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>
<body>

 
  <div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="width: 400px;">
    
    <h3 class="text-center mb-4">Login Page</h3>

  <?php
  $disp_email = "";
  $disp_pass  = "";
  $checked = "";

if(isset($_COOKIE['user_data'])){

    $data = json_decode($_COOKIE['user_data'], true);

    $disp_email = $data['email'];
    $disp_pass  = $data['password'];
    $checked = "checked";
    
}
?>
 

    <form action="" method="POST">

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input 
          type="email" 
          class="form-control" 
          id="email" 
          name="email" 
          placeholder="Enter your email"
          value="<?php echo $disp_email ?>"
          required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input 
          type="password" 
          class="form-control" 
          id="password" 
          name="password" 
          placeholder="Enter your password"
          value="<?php echo $disp_pass ?>"
          required>
      </div>

      <div class="mb-3 form-check">
      <input 
        type="checkbox" 
        class="form-check-input" 
        id="rememberMe"
        name="remember"
      <?php echo $checked; ?>
      >
      
  <label class="form-check-label" for="rememberMe">
    Remember me
  </label>
</div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">
          Login
        </button>
      </div>
       <div class="mt-4">
    <span>No account yet?</span>
    <a href="register.php">Create New Account</a>
    </div>

    </form>
  </div>  
</div>
 
 

<?php
if (!empty($error)) {
    echo $error;
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>




 
