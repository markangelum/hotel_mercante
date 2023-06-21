<?php
    if (!isset($_SESSION)){
        session_start();
    }

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }
?>
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
            <script src="src="dropdown.js></script>
            <link rel="icon" type="image/x-icon" href="/image/logo-icon.png" />

            <!-- CSS Links -->
            <link rel="stylesheet" href="css/navigation.css" />

            <title>Hotel Mercante | Home</title>
        </head>
    </head>
    <body>
        <header>
            <div class="nav-wrapper">
                <a href="index.php" class="logo">
                    <picture>
                        <source
                            media="(min-width:650px)"
                            srcset="image/logo.png"
                        />
                        <img
                            src="image/logo-icon.png"
                            alt="Flowers"
                            style="width: auto"
                        />
                    </picture>
                </a>

                <div class="hide menu-btn">
                    <i
                        class="fa-sharp fa-solid fa-bars"
                        style="color: white; font-size: 24px"
                    ></i>
                </div>
                <nav class="main-nav show">
                    <ul class="nav-links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="room.php">Rooms</a>
                        </li>
                        <li>
                            <a href="contact.php"> Contact </a>
                        </li>
                        
                        
                        <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">
                                <i class="fa-regular fa-user"></i>
                                <?php echo $_SESSION['username'] ?></button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="edit.php">Profile</a>
                            <a href="logout.php">Logout</a>
                        </div>
                        
                    </ul>
                </nav>
            </div>
        </header>

        <script src="js/menu.js"></script>
    </body>
</html>
