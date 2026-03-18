 <?php
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Carousel Start -->
  <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="slide 4.jpg" class="d-block w-100" alt="Slide 1" style="height: 500px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
          <h1 class="fw-bold">Employee Management System</h1>
          <p>Manage employee records quickly, easily, and professionally.</p>
          
        </div>
      </div>
 

      <div class="carousel-item">
        <img src="slide 5.jpg" class="d-block w-100" alt="Slide 2" style="height: 500px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
          <h1 class="fw-bold">Track Employee Details</h1>
          <p>View employee list, profiles, salary data, and other details in one place.</p>
            
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!-- Carousel End -->

  <!-- Welcome Section -->
  <section class="container py-5">
    <div class="text-center">
      <h2 class="fw-bold">Welcome to Employee Management System</h2>
      <p class="text-muted mt-3">
        This system helps you manage employee records in a simple and efficient way.
        You can add employees, view employee details, update information, and organize your data properly.
      </p>
    </div>
  </section>

  <!-- Features Section -->
  <section class="container pb-5">
    <h2 class="text-center fw-bold mb-4">System Features</h2>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center">
          <div class="card-body">
            <h4 class="card-title">Add Employee</h4>
            <p class="card-text text-muted">
              Easily add new employee records.
            </p>
             
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center">
          <div class="card-body">
            <h4 class="card-title">Employee List</h4>
            <p class="card-text text-muted">
              View all employee records in a clean table format and manage them properly.
            </p>
           
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center">
          <div class="card-body">
            <h4 class="card-title">Dashboard</h4>
            <p class="card-text text-muted">
              Access important sections quickly and control your employee management workflow.
            </p>
           
          </div>
        </div>
      </div>

    </div>
  </section>

    <!-- About Section -->
  <section id="about" class="container pb-5">
    <div class="card shadow-sm border-0">
      <div class="row g-0 align-items-center">
        <div class="col-md-6">
          <img src="slide 6.jpg" class="img-fluid rounded-start" alt="About EMS" style="height: 100%; object-fit: cover;">
        </div>
        <div class="col-md-6">
          <div class="card-body p-4">
            <h2 class="card-title">About This Project</h2>
            <p class="card-text text-muted">
              Employee Management System is designed to store and manage employee information in an organized way.
              It reduces manual work and makes it easier to handle employee records from one place.
            </p>
            <p class="card-text text-muted">
              This project includes registration, login, dashboard access, employee entry, and employee listing features.
            </p>
            <a href="#" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Contact/Info Section -->
  <section class="container pb-5">
    <div class="card border-0 shadow-sm">
      <div class="card-body text-center p-4">
        <h3 class="fw-bold">Need Management Support?</h3>
        <p class="text-muted">
          Use this system to maintain employee data, improve organization, and save time in daily record handling.
        </p>
        
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2026 Employee Management System. All Rights Reserved. Created By Mayank J Pipaliya</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>