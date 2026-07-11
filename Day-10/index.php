<?php
include("header.php");
?>

<div class="container mt-5">

    <div class="row align-items-center">

        <!-- Left Side -->
        <div class="col-md-6">

            <h1 class="display-4 fw-bold">
                Welcome to Lululand
            </h1>

            <p class="lead mt-3">
                Create your account, log in securely, and manage your profile with ease.
            </p>

        </div>

        <!-- Right Side -->
        <!-- Right Side -->
<div class="col-md-6 text-center">

    <?php if(isset($_SESSION["user_id"])) { ?>

        <a href="dashboard.php" class="btn btn-primary btn-lg w-50 mb-3">
            Go to Dashboard
        </a>

        <a href="logout.php" class="btn btn-outline-primary btn-lg w-50">
            Logout
        </a>

    <?php } else { ?>

        <a href="registration.php" class="btn btn-primary btn-lg w-50 mb-3">
            Register
        </a>

        <br>

        <a href="login.php" class="btn btn-outline-primary btn-lg w-50">
            Login
        </a>

    <?php } ?>

</div>

    </div>

</div>

<?php
include("footer.php");
?>