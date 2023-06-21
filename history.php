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
        <link rel="stylesheet" href="css/history.css" />
        <title>Hotel Mercante | UserProfile</title>
    </head>
    <body>
    <main>
    <div class="container">
      <h2>Reservation History</h2>
      <br>
      <table class="table">
         <thead>
           <tr>
              <th>Full Name</th>
              <th>Room Type</th>
              <th>Date Check-in</th>
              <th>Date Check-out</th>
              <th>Action</th>
           </tr>
          </thead>
          <tbody>
             <tr>
                <th>John Rey Soberano</th>
                <th>Single Room</th>
                <th>march 8</th>
                <th>march 10</th>
                <th>
                  <a class="btn btn-primary btn-sm" href='/operation/edit.php'>Edit</a>
                  <a class="btn btn-primary btn-sm" href='/operation/delete.php'>Delete</a>
                </th>
             </tr>
          </tbody>
      </table>
    </div>
    </main>
        <!-- Scripts -->

        <!-- menu script -->
        <script src="menu.js"></script>
    </body>
</html>

