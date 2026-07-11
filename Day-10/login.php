<?php
include("header.php");
?>
<?php
if (isset($_GET["error"])) {
?>
    <div class="alert alert-danger">
        Invalid email or password.
    </div>
<?php
}
?>
<?php
if (isset($_GET["success"])) {
?>
    <div class="alert alert-success">
        Updated successfully.
    </div>
<?php
}
?>
<div class="container mt-5" style="max-width:400px;">
    <form action="checkloginerror.php" method="post">
        <h3 class="mb-3">Login</h3>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" >
        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
        <div class="d-flex justify-content-between align-items-center mb-3">

    <div class="form-check">
        <input class="form-check-input"
               type="checkbox"
               id="rememberMe"
               name="remember_me">

        <label class="form-check-label" for="rememberMe">
            Remember Me
        </label>
    </div>

    <a href="updatePassword.php" class="text-decoration-none">
        Forgot Password?
    </a>

</div>
        <button class="btn btn-primary w-100">Login</button>
</form>
</div>
<?php
include("footer.php");
?>