<?php
include("config.php");

if(isset($_POST['book']))
{
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $doctor = $_POST['doctor'];
    $date   = $_POST['date'];
    $msg    = $_POST['message'];

    $sql = "INSERT INTO Appointments 
            (name, email, phone, doctor, appointment_date, message) 
            VALUES 
            ('$name', '$email', '$phone', '$doctor', '$date', '$msg')";

    if(mysqli_query($conn, $sql)){
        header("Location: appointment.php?success=1");
        exit();
    } else {
        die("SQL ERROR: " . mysqli_error($conn));
    }
}
?>