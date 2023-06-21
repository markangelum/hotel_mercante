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
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />


        <!-- FontAwesome Link for Icons-->
        <script
            src="https://kit.fontawesome.com/ee634a1922.js"
            crossorigin="anonymous"
        ></script>

        <!-- CSS Links -->
        <link rel="stylesheet" href="css/navigation.css" />
        <link rel="stylesheet" href="css/reservation.css">
        <title>Hotel Mercante | Reservation</title>
    </head>
    <body>
		<main>
			<div class="form-container">
				<h2 class="login-title">Reservation Form</h2>

				<div class="form-right">
					<form action="reservationmethod.php" method="POST">
					<div class="form-item">
						<span class="form-label">First Name</span>
						<input class="form-control" name="firstname" type="text" placeholder="Enter Your First Name" required>
					</div>
					<div class="form-item">
						<span class="form-label">Contact Number</span>
						<input class="form-control" name="contactnum" type="text" placeholder="Enter Your Contact Number" required>
					</div>
					<div class="form-item">
						<span class="form-label">Middle Name</span>
						<input class="form-control" name="middlename" type="text" placeholder="Enter Your Middle Name" required>
					</div>

					<div class="form-item">
						<span class="form-label">Email Address</span>
						<input class="form-control" name="email" type="text" placeholder="Enter Your Email Address" required>
					</div>
					<div class="form-item">
						<span class="form-label">Last Name</span>
						<input class="form-control" name="lastname" type="text" placeholder="Enter Your Last Name" required>
					</div>
					<div class="form-item">
						<span class="form-label">Rooms</span>
						<span class="select-arrow"></span>
							<select class="form-item" name="rooms" required>
								<option value="" selected hidden>Choose Your Room</option>
								<option>Single Room</option>
								<option>Standard Room</option>
								<option>Deluxe Room</option>
							</select>
					</div>
					<div class="form-item">
						<span class="form-label">Check In</span>
						<input class="form-control" name="checkin" type="date" required>
					</div>
					<div class="form-item">
						<span class="form-label">Check Out</span>
						<input class="form-control" name="checkout" type="date" required>
					</div>
					<div class="form-item submit">
									<button
										class="submit-btn"
										type="submit"
										name="submit"
									>
										Book Now
									</button>
					</div>
					<div class="form-item reservation-back">
									<input type="button" onclick="window.location.href='room.php';" value="Go back to rooms">
					</div>
				</div>
			</div>
		</main>

   <!-- Scripts -->

   <!-- menu script -->
   <script src="menu.js"></script>
    </body>
</html>