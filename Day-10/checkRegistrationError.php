<?php
include('db_connect.php');
$error = "";
$filename="default.jpg";
$folder = "uploads/";

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

if (
    isset($_FILES["myfile"]) &&
    $_FILES["myfile"]["error"] == 0
) {

    $allowedTypes = ["jpg", "jpeg", "png", "webp"];

    $extension = strtolower(pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION));

    $maxsize = 20 * 1024 * 1024;

    if (!in_array($extension, $allowedTypes)) {
        die("Only JPG, JPEG, PNG and WEBP files are allowed.");
    }

    if ($_FILES["myfile"]["size"] > $maxsize) {
        die("Maximum allowed file size is 20 MB.");
    }

    if ($_FILES["myfile"]["error"] != 0) {
        die("Error while uploading the file.");
    }

    $filename = time(). "_". rand(1,100) . "." . $extension;

    $destination = $folder . $filename;
    if (!move_uploaded_file($_FILES["myfile"]["tmp_name"], $destination)) {
    die("Upload failed.");
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password =mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword =mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $skills = mysqli_real_escape_string($conn,$_POST["skills"]);

    if ($name=="" || $email=="" || $password=="" ||$confirmPassword=="") {
        $error = "All fields are required.";
    }
    elseif ($password != $confirmPassword) {
        $error = "Passwords do not match.";
    }
    else {
        $insertQuery="Insert into user(name, email, password, photo, skills) values('$name','$email','$password','$filename','$skills')";
        $result= mysqli_query($conn,$insertQuery);
        if($result){
            header("location: success.php");
        } else {
            echo "Error occured while storing date";
            echo "error:".mysqli_error($conn);
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

    <a href="registration.php" class="btn btn-primary">Go Back</a>

</div>

<?php
include("footer.php");
?>