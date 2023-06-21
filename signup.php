<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="assets/image/logo-icon.png" />
        <!-- Font Links -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap"
            rel="stylesheet"
        />

        <!-- FontAwesome Link for Icons-->
        <script
            src="https://kit.fontawesome.com/ee634a1922.js"
            crossorigin="anonymous"
        ></script>

        <!-- CSS Links -->
        <link rel="stylesheet" href="css/signup.css" />
        <title>Hotel Mercante | Signup</title>
    </head>
    <body>
        <div class="wrapper">
       

        <main>
                <div class="form-container">
                    <!-- main form -->
                    <div class="form-right">
                        <h2 class="login-title">Create account</h2>

                        <form action="signupdb.php" method="POST">
                            <div class="form-item">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" placeholder="Enter Your First Name" style="text-transform: capitalize" required>
                            </div>

                            <div class="form-item">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" placeholder="Enter Your Last Name" style="text-transform: capitalize" required>
                            </div>

                            <div class="form-item">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" name="birth_date" placeholder="Enter Your Brith Date " required>
                            </div>

                            <div class="form-item">
                                <label for="email_address">Email Address</label>
                                <input type="email" name="email_address" placeholder="Enter Your Email Address" required>
                            </div>

                            <div class="form-item">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Enter Your Password" required>
                            </div>

                            <div class="form-item">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" placeholder="Enter Your Confirm Password" required>
                            </div>

                            <?php if (isset($_GET['error'])) {?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>


                            <div class="form-item signup">
                                <button
                                    class="signup-btn"
                                    type="submit"
                                    name="signup"
                                >
                                    Sign Up
                                </button>
                            </div>

                            <div class="form-item">
                                <p>
                                    Already have and account?
                                    <a href="login.php">Login</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>

        <!-- Scripts -->

        <!-- menu script -->
        <script src="menu.js"></script>
    </body>
</html>

