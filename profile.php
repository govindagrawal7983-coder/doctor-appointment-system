<?php
session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
}

include("config/db.php");

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM patients WHERE id='$id'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
?>

<?php include("header.php"); ?>

<h2>Welcome <?php echo $row['name']; ?></h2>

<p><b>Email:</b> <?php echo $row['email']; ?></p>

<p><b>Phone:</b> <?php echo $row['phone']; ?></p>

<a href="logout.php" class="btn btn-danger">
Logout
</a>

<?php include("footer.php"); ?>