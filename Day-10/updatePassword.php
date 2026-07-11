<?php
include("header.php");
?>
<?php
if (isset($_GET["error"])&& $GET["error"]==1) {
?>
    <div class="alert alert-danger">
        old password does not match.
    </div>
<?php
}
?>
<?php
if(isset($_GET["error"])&& $GET["error"]==2){
?>
<div class="alert alert-danger">
        new and confirm password do not match.
    </div>
<?php
}
?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Update Password</h3>
                </div>

                <div class="card-body">

                    <form action="checkUpdatePassword.php" method="POST">

                        
                        <div class="mb-3">
                            <label class="form-label">Old Password</label>

                            <input
                                type="password"
                                name="oldPassword"
                                class="form-control"
                                placeholder="Enter old password"
                                required>
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label">New Password</label>

                            <input
                                type="password"
                                name="newPassword"
                                class="form-control"
                                placeholder="Enter new password"
                                required>
                        </div>

                        
                        <div class="mb-4">
                            <label class="form-label">Confirm Password</label>

                            <input
                                type="password"
                                name="confirmPassword"
                                class="form-control"
                                placeholder="Confirm new password"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100">

                            Update Password

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