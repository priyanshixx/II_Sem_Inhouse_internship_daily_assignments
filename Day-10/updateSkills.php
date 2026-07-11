<?php
include("header.php");
include("db_connect.php");

$email = $_SESSION["email"];

$query = "SELECT skills FROM user WHERE email='$email'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);
?>

<div class="container mt-5">

<form action="checkUpdateSkills.php" method="POST">

<label class="form-label">
Skills
</label>

<textarea
name="skills"
class="form-control"
rows="6"><?php echo $row["skills"]; ?></textarea>

<br>

<button class="btn btn-primary">
Update Skills
</button>

</form>

</div>

<?php
include("footer.php");
?>