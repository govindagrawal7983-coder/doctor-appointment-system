 <?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>
<?php
include("config.php");

$totalQuery = "SELECT COUNT(*) as total FROM Appointments";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalAppointments = $totalRow['total'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { background:#f4f6f9; }
.card-box {
    border-radius:15px;
    color:white;
    padding:20px;
}
</style>
</head>
<body>

<div class="container mt-5">

<h2 class="mb-4">
    Admin Dashboard
    <a href="logout.php" class="btn btn-danger float-end">Logout</a>
</h2>

<div class="row mb-4">
<div class="col-md-4">
<div class="card-box bg-primary">
<h4>Total Appointments</h4>
<h2><?php echo $totalAppointments; ?></h2>
</div>
</div>
</div>

<div class="card shadow">
<div class="card-header bg-dark text-white">
All Appointments
</div>

<div class="card-body">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Doctor</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$query = "SELECT * FROM Appointments ORDER BY id DESC";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['doctor']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td>
<a href="delete.php?id=<?php echo $row['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure?')">
Delete
</a>
</td>
</tr>
<?php } ?>

</tbody>
</table>
</div>
</div>

</div>
</body>
</html>