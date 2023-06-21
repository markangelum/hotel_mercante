<?php
    session_start();
    if (isset($_SESSION['customer_id'])){
        include 'navigation.php';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/image/logo-icon.png">

    <link rel="stylesheet" href="css/index.css">
    <title>Hotel Mercante | Home</title>
</head>
<body>

    <main>
        <div class="homepage-container">
            <h1 class="title">Hotel Mercante</h1>
            <p>
            Hotel Mercante is a premier online platform dedicated to seamless hotel room reservations. 
            With our user-friendly interface and extensive network of partner hotels, we provide a convenient 
            and reliable solution for travelers to easily book their ideal accommodations and enjoy a 
            hassle-free hotel experience.
            </p>
            <p>
            At Hotel Mercante, we understand the importance of a comfortable and 
            memorable stay. Our website offers a wide range of hotel options, from luxurious resorts to budget-friendly 
            accommodations, ensuring that every traveler can find the perfect room to suit their needs. With our 
            secure booking system, competitive prices, and exceptional customer service, Hotel Mercante strives to 
            make the process of hotel room reservation effortless and enjoyable for our valued guests.
            </p>
            <a href="room.php" class="homepage-btn">Reserve Now</a>
        </div>

     
                </main>

</body>
</html>

