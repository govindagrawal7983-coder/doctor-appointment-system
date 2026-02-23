<?php
include("config.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM Appointments WHERE id=$id");

header("Location: admin_dashboard.php");
?>