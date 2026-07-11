<?php
include("header.php");
?>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1>About Our Website</h1>
        <p class="text-muted">
            Learn more about our student management system.
        </p>
    </div>

    <div class="row align-items-center">

        <div class="col-md-6 ps-5">

            <img src="about.jpg"
                 width="500" height="300"
                 class="img-fluid rounded shadow"
                 alt="About">

        </div>

        <div class="col-md-6">

            <h2>Who We Are</h2>

            <p>
                This website is a PHP and MySQL project developed as part of our Industrial Training.
                It demonstrates user registration, login authentication, password management,
                profile updates, and skill management.
            </p>

            <p>
                Our goal is to learn full-stack web development using HTML, CSS, Bootstrap,
                PHP, and MySQL.
            </p>

            <a href="registration.php" class="btn btn-primary">
                Register Now
            </a>

        </div>

    </div>

</div>

<?php
include("footer.php");
?>