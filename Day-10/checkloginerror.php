<?php
session_start();
include("db_connect.php");
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password =mysqli_real_escape_string($conn, $_POST["password"]);

    if ($email=="" || $password=="") {
        $error = "All fields are required.";
    }
    else {
        $selectQuery="Select * from user where email='$email' and password='$password'";
        $result= mysqli_query($conn,$selectQuery);
        if(mysqli_num_rows($result)>0){
            $row= mysqli_fetch_assoc($result);
            $_SESSION["user_id"]=$row["id"];
            $_SESSION["user_name"]=$row["name"];
            $_SESSION["email"]=$row["email"];
            $_SESSION["photo"]=$row["photo"];

            header("location: dashboard.php");
        } else {
           header("location: login.php?error=1");
        }
        exit();
    }
}

include("header.php");
?>

<div class="container mt-5 text-center">

    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <a href="login.php" class="btn btn-primary">Go Back</a>

</div>

<?php
include("footer.php");
?>