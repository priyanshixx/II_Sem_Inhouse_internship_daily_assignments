<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
        content = "wit=dth=device-width, initial-scale=1.0">
        <title>My Website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        .nav-link{
    color: black !important;
    transition: color 0.3s ease;
}

.nav-link:hover{
    color: #0d6efd !important;
}
</style>

</head>
<body>
    <header class="bg-light border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
            <img src="apple.png" alt="logo" width="80">
            
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">home</a>
</li>
                     <li class="nav-item">
                        <a href="about.php" class="nav-link">about us</a>
</li>
                     <li class="nav-item">
                        <a href="contact.php" class="nav-link">contact us</a>
</li>
</ul>
</nav>

<?php if (isset($_SESSION["user_id"])) { ?>

    <?php
    $photo = "default.jpg";

    if (!empty($_SESSION["photo"])) {
        $photo = $_SESSION["photo"];
    }
    ?>

    <div class="d-flex align-items-center">
        <img
            src="uploads/<?php echo $photo; ?>"
            width="45"
            height="45"
            class="rounded-circle border"
            alt="Profile"
            >
        <div class="ps-3">
        <a href="logout.php" class="btn btn-primary">logout</a>
</div>

    </div>


<?php } else { ?>

    <a href="login.php" class="btn btn-primary">
        Login
    </a>

<?php } ?>
</div>
</div>
</header>



