<?php
    session_start();
    if (isset($_SESSION['username'])) {
        include 'navigation.php';
    }
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
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />


        <!-- FontAwesome Link for Icons-->
        <script
            src="https://kit.fontawesome.com/ee634a1922.js"
            crossorigin="anonymous"
        ></script>

        <!-- CSS Links -->
        <link rel="stylesheet" href="assets/css/navigation.css" />
        <link rel="stylesheet" href="css/contact.css">
        <title>Hotel Mercante | Contact</title>
    </head>
    <body>
        <div class="wrapper">
       

            <main>
                <form action="contactmethod.php" method="post">
                    <div class="form-header">
                        <h2>Contact Us</h2>
                        <p>Please fill this form in a decent manner</p>
                    </div>

                    <div class="form-body">
                        <div>
                            <label for="full-name">Full Name </label>
                            <input
                                type="text"
                                name="full-name"
                                id="full-name"
                                placeholder="Juan Dela Cruz"
                                style="text-transform: capitalize"
                                required
                            />
                        </div>

                        <div>
                            <label for="email">Email </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="juandelacruz@example.com"
                                required
                            />
                        </div>

                        <div>
                            <label for="message">Message</label>
                            <textarea
                                name="message"
                                id="message"
                                cols="1005"
                                rows="8"
                                placeholder="Message here..."
                                required
                            ></textarea>
                        </div>
                        
                        <?php if (isset($_GET['success'])) {?>
                            <div class="success"><?php echo $_GET['success'];?></div>
                        <?php } ?>

                        <div>
                            <button type="submit"
                                id="submit"
                                class="submit-btn">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </main>
        </div>

        <!-- Scripts -->

        <!-- menu script -->
        <script src="menu.js"></script>
    </body>
</html>
