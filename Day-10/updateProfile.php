<?php
include("header.php");
?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Update Profile Picture</h3>
                </div>

                <div class="card-body">

                    <?php
                    if(isset($_GET["success"])){
                        echo '<div class="alert alert-success">
                                Profile picture updated successfully.
                              </div>';
                    }

                    if(isset($_GET["error"])){
                        echo '<div class="alert alert-danger">
                                Failed to upload image.
                              </div>';
                    }
                    ?>

                    <div class="text-center mb-4">

                        <img
                        src="uploads/<?php echo $_SESSION["photo"]; ?>"
                        class="rounded-circle border"
                        width="120"
                        height="120">

                    </div>

                    <form
                    action="checkUpdateProfile.php"
                    method="POST"
                    enctype="multipart/form-data">

                        <input
                        type="file"
                        name="myfile"
                        class="form-control mb-3"
                        required>

                        <button
                        class="btn btn-primary w-100">

                            Update Picture

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php
include("footer.php");
?>