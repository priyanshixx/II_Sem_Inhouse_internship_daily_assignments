<?php
include("header.php");
?>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1>Contact Us</h1>
        <p class="text-muted">
            We'd love to hear from you! Feel free to reach out.
        </p>
    </div>

    <div class="row">

        <!-- Contact Information -->
        <div class="col-md-5">

            <div class="card shadow-sm p-4">

                <h3>Get In Touch</h3>

                <hr>

                <p>
                    <strong>📍 Address:</strong><br>
                    Jaipur, Rajasthan, India
                </p>

                <p>
                    <strong>📞 Phone:</strong><br>
                    +91 66666 66666
                </p>

                <p>
                    <strong>📧 Email:</strong><br>
                    support@mywebsite.com
                </p>

                <p>
                    <strong>🕒 Office Hours:</strong><br>
                    Monday - Friday<br>
                    9:00 AM - 6:00 PM
                </p>

            </div>

        </div>

        <!-- Contact Form -->
        <div class="col-md-7">

            <div class="card shadow-sm p-4">

                <h3>Send us a Message</h3>

                <form>

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Enter your name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Subject">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea
                            class="form-control"
                            rows="5"
                            placeholder="Write your message"></textarea>
                    </div>

                    <button class="btn btn-primary">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<?php
include("footer.php");
?>