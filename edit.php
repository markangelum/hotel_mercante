<?php
    include 'navigation.php';
    include 'connect.php';
?>

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
        <link rel="stylesheet" href="css/edit.css" />
        <title>Hotel Mercante | UserProfile</title>
    </head>
    <body>
        <div class="wrapper">
        <main>
        
                <div class="form-container">
                    <!-- main form -->
                    <div class="form-right">
                        <h2 class="login-title">User Profile</h2>


                        <form action="editmethod.php" method="POST">
                            <div class="form-item">
                                <label for="first_name">First Name:</label>
                                <input type="text" name="first_name" style="text-transform: capitalize" value="<?php echo $_SESSION['first_name']; ?>" required>
                            </div>

                            <div class="form-item">
                                <label for="middle_name">Middle Name:</label>
                                <input type="text" name="middle_name" style="text-transform: capitalize" value="<?php echo $_SESSION['middle_name']; ?>">
                            </div>

                            <div class="form-item">
                                <label for="last_name">Last Name:</label>
                                <input type="text" name="last_name" style="text-transform: capitalize" value="<?php echo $_SESSION['last_name']; ?>" required>
                            </div>

                            <div class="form-item">
                                <label for="user_name">User Name:</label>
                                <input type="text" name="user_name" value="<?php echo $_SESSION['username']; ?>" required>
                            </div>

                            <div class="form-item">
                                <label for="birth_date">Birth Date:</label>
                                <input type="date" name="birth_date" value="<?php echo $_SESSION['birthday']; ?>" required>
                            </div>

                            <div class="form-item">
                                <label for="email_address">Email Address:</label>
                                <input type="email" name="email_address" value="<?php echo $_SESSION['email']; ?>" required>
                            </div>

                            <div class="form-item">
                                <label for="contact_number">Contact Number:</label>
                                <input type="number" name="contact_number" value="<?php echo $_SESSION['contact_number'];?>" required>
                            </div>

                            <div class="form-item">
                                <label for="address">Address:</label>
                                <input type="text" name="address" style="text-transform: capitalize" value="<?php echo $_SESSION['address']; ?>" required>
                            </div>

                            <div class="form-item">
                                <label for="gender">Gender:</label>
                                <input type="text" name="gender" style="text-transform: capitalize" value="<?php echo $_SESSION['gender']; ?>" required>
                            </div>



                            <div class="form-item edit">
                                <button
                                    class="edit-btn"
                                    type="submit"
                                    name="edit"
                                >
                                    Update Changes
                                </button>
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

