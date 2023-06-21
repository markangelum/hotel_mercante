<?php
    if (isset($_SESSION['username']));
    include 'navigation.php';
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
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
            rel="stylesheet"
        />
        
        <!-- FontAwesome Link for Icons-->
        <script
            src="https://kit.fontawesome.com/ee634a1922.js"
            crossorigin="anonymous"
        ></script>

        <!-- CSS Links -->
        <link rel="stylesheet" href="css/about.css" />

        <title>Hotel Mercante | About</title>
    </head>
    <body>
        <div class="wrapper">
      
            <main>
                <div class="about-wrapper">
                    <!-- about title -->
                    <h2 class="title">About Us</h2>

                    <!-- about content -->
                    <div class="about-content-container">
                        <!-- location/trademark -->
                        <div class="row">
                            <!-- location -->
                            <div class="columns">
                                <p class="sub-title">
                                    Location
                                    <i
                                        class="fa-sharp fa-solid fa-location-dot"
                                    ></i>
                                </p>
                                <p>
                                    Bonifacio, corner Plaridel St., Barangay 1,
                                    Vigan City, 2700 Ilocos Sur
                                </p>
                            </div>

                            <!-- trademark -->
                            <div class="columns trademark">
                                <p class="sub-title">
                                    Trademark
                                    <i class="fa-regular fa-registered"></i>
                                </p>
                                <p>Northern Business Heritage Ventures Inc.</p>
                            </div>
                        </div>

                        <!-- year established/mission -->
                        <div class="row">
                            <!-- year established -->
                            <div class="columns">
                                <p class="sub-title">
                                    Year Established
                                    <i class="fa-solid fa-calendar-days"></i>
                                </p>
                                <p>2023</p>
                            </div>

                            <!-- mission -->
                            <div class="columns">
                                <p class="sub-title">
                                    Mission <i class="fa-regular fa-notdef"></i>
                                </p>
                                <p>
                                    To provide exceptional hospitality experiences that exceed our guest's expextations
                                    through personalized services, luxurious accommodations, and a commitment to creating 
                                    memorable moments.
                                </p>
                            </div>
                        </div>

                        <!-- owner/ vision -->
                        <div class="row">
                            <!-- year established -->
                            <div class="columns">
                                <p class="sub-title">
                                    Owner <i class="fa-solid fa-user"></i>
                                </p>
                                <p>Ronadette Reupta</p>
                            </div>

                            <!-- mission -->
                            <div class="columns">
                                <p class="sub-title">
                                    Vision <i class="fa-solid fa-eye"></i>
                                </p>
                                <p>
                                    To be recognized as the premier hotel of choice, renowned for our unparalled 
                                    services, exquisite amenities, and a dedication to creating an atmosphere of warmth and comfort,
                                    ensuring that every guest feels at home.
                                </p>
                            </div>
                        </div>

                        <!-- contact -->
                        <div class="row">
                            <div class="columns">
                                <p class="sub-title">
                                    Contact <i class="fa-solid fa-phone"></i>
                                </p>

                                <p>
                                    <i class="fa-solid fa-phone"></i>
                                    09123456789
                                </p>
                                <p>
                                    <i class="fa-solid fa-envelope"></i>
                                    example123@email.com
                                </p>
                                <p>
                                    <i class="fa-brands fa-facebook"></i> Hotel
                                    Mercante Official
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Scripts -->

        <!-- menu script -->
        <script src="menu.js"></script>
    </body>
</html>
