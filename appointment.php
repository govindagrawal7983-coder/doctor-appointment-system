<?php include("header.php"); ?>

<section class="appointment-section">
<div class="container">
<div class="appointment-box">

<h2>Book Your Appointment</h2>

<?php
if(isset($_GET['success'])){
    echo "<div class='success-msg'>Appointment Booked Successfully!</div>";
}
?>

<form id="appointmentForm"
 action="save_appointment.php" method="POST">

<div class="input-group">
<input type="text" name="name" required>
<label>Full Name</label>
</div>

<div class="input-group">
<input type="email" name="email" required>
<label>Email Address</label>
</div>

<div class="input-group">
<input type="text" name="phone" required>
<label>Phone Number</label>
</div>

<div class="input-group">
<select name="doctor" required>
<option value="">Select Doctor</option>
<option value="Dr. Sharma">Dr. Sharma</option>
<option value="Dr. Khan">Dr. Khan</option>
</select>
</div>

<div class="input-group">
<input type="date" name="date" required>
</div>

<div class="input-group">
<textarea name="message" required></textarea>
<label>Message</label>
</div>

<button type="submit" name="book">Confirm Appointment</button>

</form>

</div>
</div>
</section>





<?php include("footer.php"); ?>