<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO patients 
    (full_name,email,phone,gender,dob,address,password)
    VALUES 
    ('$name','$email','$phone','$gender','$dob','$address','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registration Successful'); window.location='login.php';</script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Patient Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
<h2 class="text-center mb-4">Patient Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" class="form-control mb-3" required>

<input type="email" name="email" placeholder="Email" class="form-control mb-3" required>

<input type="text" name="phone" placeholder="Phone" class="form-control mb-3" required>

<select name="gender" class="form-control mb-3" required>
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>

<input type="date" name="dob" class="form-control mb-3" required>

<textarea name="address" placeholder="Address" class="form-control mb-3" required></textarea>

<input type="password" name="password" placeholder="Password" class="form-control mb-3" required>

<button type="submit" class="btn btn-primary w-100">Register</button>

</form>
</div>
</body>
</html>