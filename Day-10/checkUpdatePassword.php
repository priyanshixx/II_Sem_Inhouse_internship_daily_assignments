<?php
session_start();
include("db_connect.php");
$error = "";
$success="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $oldPassword =$_POST["oldPassword"];
    $newPassword =$_POST["newPassword"];
    $confirmPassword =$_POST["confirmPassword"];
    $email = $_SESSION["email"];

    if ($oldPassword==""||$newPassword==""||$confirmPassword=="") {
        $error = "All fields are required.";
    }
    else {
        $selectQuery="Select * from user where email='$email' and password='$oldPassword'";
        $result= mysqli_query($conn,$selectQuery);
        $row = mysqli_fetch_assoc($result);
        if($oldPassword!=$row["password"]){
            header("location: updatePassword.php?error=1");
        } elseif($newPassword!=$confirmPassword) {
           header("location: updatePassword.php?error=2");
        }
        else{
             $updateQuery = "Update user
                    SET password='$newPassword'
                    WHERE email='$email'";
                    mysqli_query($conn, $updateQuery);
                    header("location: login.php?success=1");
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