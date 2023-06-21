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
        <link rel="stylesheet" href="css/login.css" />
        <title>Hotel Mercante | Login</title>
    </head>
    <body>
        <!DOCTYPE html>
<html lang="en">
    <head>
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0"
            />
            <link rel="icon" href="assets/image/logo-icon.png" />
            <!-- Font Links -->
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link
                rel="preconnect"
                href="https://fonts.gstatic.com"
                crossorigin
            />
            <link
                href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
                rel="stylesheet"
            />

            <!-- FontAwesome Link for Icons-->
            <script
                src="https://kit.fontawesome.com/ee634a1922.js"
                crossorigin="anonymous"
            ></script>
            <link rel="icon" type="image/x-icon" href="/image/logo-icon.png" />

            <!-- CSS Links -->
            <link rel="stylesheet" href="css/navigation.css" />

            <title>Hotel Mercante | Home</title>
        </head>
    </head>
    <body>
        <div class="wrapper">
            <main>
                <div class="form-container">
                    <!-- description -->
                    <div class="form-left">
                        <div class="desc-content">
                            <h2>Hotel Mercante</h2>
                            <p>
                            Hotel Mercante is a premier online platform dedicated to seamless hotel room reservations. 
                            With our user-friendly interface and extensive network of partner hotels, we provide a convenient 
                            and reliable solution for travelers to easily book their ideal accommodations and enjoy a 
                            hassle-free hotel experience.
                            </p>
                        </div>
                    </div>

                    <!-- main form -->
                    <div class="form-right">
                        <h2 class="login-title">Login</h2>

                        <form action="loginmethod.php" method="post">
                            <div class="form-item">
                                <label for="email_address">Email Address:</label>
                                <input type="email" id="email_address" name="email_address" placeholder="Enter Your Email Address" required>
                            </div>

                            <div class="form-item">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
                            </div>

                            <div class="form-item remember">
                                <div class="remember-me">
                                    <input
                                        type="checkbox"
                                        name="remember-checkbox"
                                        id="remember-checkbox"
                                    />
                                    <span>Remember me</span>
                                </div>

                                <div class="forgot-pass">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>

                            <?php if (isset($_GET['error'])) {?>
                                <p class="error"><?php echo '<i class="fa-solid fa-triangle-exclamation" style="color: #c6976d;"></i>' . " " .  $_GET['error']; ?></p>
                            <?php } ?>

                            <div class="form-item btn">
                                <button class="login-btn" type="submit" name="login">
                                    Login
                                </button>
                            </div>

                            <div class="form-item">
                                <p>
                                    Don't have an account?
                                    <a href="signup.php"
                                        >Create account</a
                                    >
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
