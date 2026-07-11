<?php
include("header.php");
include('db_connect.php');
?>
<div class="container mt-5" style="max-width:400px;">
    <form action="checkRegistrationError.php" method="post" enctype="multipart/form-data">
        <h3 class="mb-3">Register</h3>
        <input type="file" name="myfile" class="mb-3" placeholder="upload file">
        <input type="text" name="name" class="form-control mb-3" placeholder="Name">
        <input type="email" name="email" class="form-control mb-3" placeholder="Email">
        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
        <input type="password" name="confirmPassword" class="form-control mb-3" placeholder="Confirm Password">
        <input type="text" name="skills" class="form-control mb-3" placeholder="Skills (ex: c++, python, java etc.)">
        <button class="btn btn-primary w-100">Register</button>
</form>
</div>
<?php
include("footer.php");
?>