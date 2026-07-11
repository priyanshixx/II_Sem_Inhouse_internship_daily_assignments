<?php

session_start();
include("db_connect.php");

$folder = "uploads/";

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

if(isset($_FILES["myfile"])){

    $allowedTypes = ["jpg","jpeg","png","webp"];

    $extension = strtolower(
        pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION)
    );

    if(!in_array($extension,$allowedTypes)){

        header("Location:updateProfile.php?error=1");
        exit();

    }

    $filename = time()."_".rand(1,100).".".$extension;

    $destination = $folder.$filename;

    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$destination)){

        $email = $_SESSION["email"];

        $updateQuery = "UPDATE user
                  SET photo='$filename'
                  WHERE email='$email'";

        mysqli_query($conn,$updateQuery);

        // Update session so the new image appears immediately
        $_SESSION["photo"] = $filename;

        header("Location:updateProfile.php?success=1");
        exit();

    }

}

header("Location:updateProfile.php?error=1");
exit();

?>