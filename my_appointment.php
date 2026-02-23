<?php
session_start();
include("config.php");

$query = "SELECT * FROM appointments ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<h2>My Appointments</h2>

<table class="table table-bordered">
<tr>
<th>Name</th>
<th>Doctor</th>
<th>Date</th>
<th>Message</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['doctor']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['message']; ?></td>
</tr>
<?php } ?>

</table>