<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin - Appointments</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h2 class="mb-4 text-center">All Appointments</h2>

<table class="table table-bordered table-striped">
<thead class="table-dark">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Doctor</th>
<th>Date</th>
<th>Message</th>
<th>Created At</th>
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
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['doctor']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['created_at']; ?></td>
</tr>

<?php } ?>

</tbody>
</table>

</div>

</body>
</html>