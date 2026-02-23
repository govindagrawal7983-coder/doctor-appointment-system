

<!DOCTYPE html>
<html>
<head>
    <title>Medical Care</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Your CSS -->
    <link rel="stylesheet" href="css/style.css">


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
.gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
}

.gallery-card img {
    transition: 0.5s ease;
    border-radius: 15px;
}

.gallery-card:hover img {
    transform: scale(1.1);
}

.overlay {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    width: 100%;
    text-align: center;
    padding: 10px;
    opacity: 0;
    transition: 0.5s;
}

.gallery-card:hover .overlay {
    opacity: 1;
}
</style>

<style>

.appointment-section {
    height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg,#007bff,#00c6ff);
}

.appointment-box {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 20px;
    width: 100%;
    max-width: 500px;
    margin: auto;
    color: white;
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

.appointment-box h2 {
    text-align: center;
    margin-bottom: 30px;
}

.input-group {
    position: relative;
    margin-bottom: 25px;
}

.input-group input,
.input-group textarea,
.input-group select {
    width: 100%;
    padding: 10px;
    border: none;
    border-bottom: 2px solid white;
    background: transparent;
    color: white;
    outline: none;
}

.input-group label {
    position: absolute;
    top: 10px;
    left: 0;
    font-size: 14px;
    transition: 0.3s;
}

.input-group input:focus + label,
.input-group textarea:focus + label,
.input-group input:valid + label,
.input-group textarea:valid + label {
    top: -15px;
    font-size: 12px;
    color: #ffd700;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 30px;
    background: #ffd700;
    color: black;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: white;
}

.success-msg {
    background: #28a745;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    margin-bottom: 15px;
}

</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
🏥 MedicalCare
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="appointment.php">Appointment</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>

<li class="nav-item">
<a class="nav-link btn btn-light text-primary ms-2 px-3" href="register.php">Register</a>
</li>

</ul>
</div>
</div>
</nav>

<div class="container mt-4">
