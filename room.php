<?php
    include 'navigation.php';
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hmviganrsdb";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
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
        <link rel="stylesheet" href="css/navigation.css" />
        <link rel="stylesheet" href="css/room.css" />
        <title>Hotel Mercante | Room</title>
    </head>
    <body>
        <div class="wrapper">
          
            <!-- main -->

            <main>
                <div class="rooms-container">
                    <h2 class="room-title">Our Rooms</h2>
                    <p class="room-sub-title">Hotel Mercante</p>

                    <!-- room -->
                    <div class="room-row">
                        <?php
                            $firstroom = "SELECT * FROM accommodation WHERE AccomID = 'A001'";
                            $result = mysqli_query($conn, $firstroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/single-room.jpg"
                                alt="single room"
                            />
                            
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'A001'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable disabled">';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $secondroom = "SELECT * FROM accommodation WHERE AccomID = 'A002'";
                            $result = mysqli_query($conn, $secondroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/standard-room.jpg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'A002'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $thirdroom = "SELECT * FROM accommodation WHERE AccomID = 'A003'";
                            $result = mysqli_query($conn, $thirdroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'A003'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $thirdroom = "SELECT * FROM accommodation WHERE AccomID = 'B101'";
                            $result = mysqli_query($conn, $thirdroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'B101'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $fourthroom = "SELECT * FROM accommodation WHERE AccomID = 'B102'";
                            $result = mysqli_query($conn, $fourthroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'B102'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $fourthroom = "SELECT * FROM accommodation WHERE AccomID = 'B102'";
                            $result = mysqli_query($conn, $fourthroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'B103'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $thirdroom = "SELECT * FROM accommodation WHERE AccomID = 'C201'";
                            $result = mysqli_query($conn, $thirdroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'C201'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $thirdroom = "SELECT * FROM accommodation WHERE AccomID = 'C202'";
                            $result = mysqli_query($conn, $thirdroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'C202'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <?php
                            $thirdroom = "SELECT * FROM accommodation WHERE AccomID = 'C203'";
                            $result = mysqli_query($conn, $thirdroom);

                            while($row = mysqli_fetch_assoc($result)) {
                                if ($row["Status"] == 1){
                                    echo '<div class="room-col-available">';
                                } else {
                                    echo '<div class="room-col-unavailable">';
                                }
                            }
                        ?>
                            <img
                                src="image/deluxe-room.jpeg"
                                alt="single room"
                            />
                            <div class="room-desc">
                                <h3 class="desc-title">
                                    <?php
                                    $description = "SELECT * FROM accommodation WHERE AccomID = 'C203'";
                                    $result = mysqli_query($conn, $description);

                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo $row["RName"] .
                                '</h3>';
                                    echo '<p class="desc-sub-title">
                                        <i class="fa-regular fa-user"></i> ' . $row['Capacity'] . '</p>';
                                    echo '<p class="desc-content">' . $row['Description'] . '</p>';
                                }
                                
                                $result = mysqli_query($conn, $description);
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row["Status"] == "1"){
                                        echo '<p>Status: Available</p>';
                                    } else {
                                        echo '<p>Status: Reserved!</p>';
                                    }
                                }
                                
                                echo '<div class="btn">';
                                    $result = mysqli_query($conn, $description);
                                    while($row = mysqli_fetch_assoc($result)) {
                                            if ($row["Status"] == 1){
                                                echo '<button class="room-btn">';
                                            } else {
                                                echo '<button class="room-btn-unavailable" disabled>';
                                            }
                                            echo "Book now ";
                                            echo '<i class="fa-sharp fa-solid fa-peso-sign"></i>';
                                            echo $row["Price"] . "/day";
                                        }
                                        ?>
                                    </button>
                                </div>
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