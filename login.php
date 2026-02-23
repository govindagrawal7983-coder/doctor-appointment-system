<?php
session_start();
include("config/db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM patients WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];

        header("Location: profile.php");
    }
    else
    {
        echo "Invalid login";
    }
}
?>

<?php include("header.php"); ?>

<h2>Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" class="form-control mb-2" required>

<input type="password" name="password" placeholder="Password" class="form-control mb-2" required>

<button name="login" class="btn btn-success">
Login
</button>

</form>

<?php include("footer.php"); ?>