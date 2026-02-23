<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Medical Care</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">

<style>
body{
    font-family: 'Poppins', sans-serif;
}


.hero{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), 
    url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3');
    background-size: cover;
    background-position: center;
    height: 90vh;
    color: white;
    display: flex;
    align-items: center;
}

.hero h1{
    font-size: 48px;
    font-weight: 700;
}

.section-padding{
    padding: 60px 0;
}

.footer{
    background: #111;
    color: white;
    padding: 40px 0;
}

.footer a{
    color: #ccc;
    text-decoration: none;
}

.footer a:hover{
    color: white;
}


</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">MedicalCare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#doctors">Doctors</a></li>
        <li class="nav-item">
          <a href="admin_login.php" class="btn btn-primary ms-3">Admin Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
  <div class="container text-center hero-content">
    <h1>Your Health Is Our Priority</h1>
    <p class="lead mb-4">24/7 Emergency & Expert Doctors Available</p>
    <a href="appointment.php" class="btn btn-success btn-lg me-3">Book Appointment</a>
    <a href="admin_login.php" class="btn btn-outline-light btn-lg">Admin Login</a>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="section-padding text-center">
  <div class="container">
    <h2 class="mb-5">Our Services</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-4 shadow">
          <h4>Cardiology</h4>
          <p>Expert heart specialists available 24/7.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 shadow">
          <h4>Dental Care</h4>
          <p>Complete dental treatment and surgery.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-4 shadow">
          <h4>General Checkup</h4>
          <p>Regular health checkup & diagnostics.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DOCTORS -->
<section id="doctors" class="section-padding bg-light text-center">
  <div class="container">
    <h2 class="mb-5">Our Doctors</h2>
    <div class="row">

      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Dr. Raj Sharma</h5>
            <p>Cardiologist</p>
            <a href="appointment.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Dr. Neha Singh</h5>
            <p>Dentist</p>
            <a href="appointment.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <img src="https://randomuser.me/api/portraits/men/45.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Dr. Amit Verma</h5>
            <p>General Physician</p>
            <a href="appointment.php" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <h5>MedicalCare</h5>
        <p>Providing trusted healthcare services with expert doctors and modern facilities.</p>
      </div>

      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#doctors">Doctors</a></li>
          <li><a href="admin_login.php">Admin Login</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5>Contact</h5>
        <p>Email: info@medicalcare.com</p>
        <p>Phone: +91 9876543210</p>
        <p>Address: Your City, India</p>
      </div>

    </div>

    <hr class="bg-light">

    <div class="text-center">
      © 2026 MedicalCare | All Rights Reserved
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>





</body>
</html>