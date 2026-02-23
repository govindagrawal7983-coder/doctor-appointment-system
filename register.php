<?php
include("config/db.php");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO patients (name,email,phone,password)
            VALUES ('$name','$email','$phone','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "Registered Successfully";
    }
    else
    {
        echo "Error";
    }
}
?>

<?php include("header.php"); ?>

<h2>Register</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" class="form-control mb-2" required>

<input type="email" name="email" placeholder="Email" class="form-control mb-2" required>

<input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>

<input type="password" name="password" placeholder="Password" class="form-control mb-2" required>

<button name="register" class="btn btn-primary">
Register
</button>

</form>

<?php include("footer.php"); ?>