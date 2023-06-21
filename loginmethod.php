<?php
    session_start();
    include 'navigation.html';

    $connect = new PDO("mysql:host=localhost;dbname=hmviganrsdb",'root', '');
    // Get the submitted email and password from the form
    $email = $_POST['email_address'];
    $password = $_POST['password'];

    // Prepare a SQL statement to retrieve user data
    $query1 = $connect->prepare("SELECT * FROM customer WHERE email_address = :email_address AND password = :password");
    $query1->bindParam(':email_address', $email);
    $query1->bindParam(':password', $password);
    $query1->execute();

    $_SESSION['email'] = $email;

    // Check if the user exists
    if ($query1->rowCount() > 0) {
    // User exists, redirect to another page
    $query = "SELECT * FROM customer WHERE email_address = :email";
    $statement = $connect->prepare($query);
    $statement->bindValue(':email', $_SESSION['email']);
    $statement->execute();

    // Fetch the results as an associative array
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    // Process the result
    if ($row) {
    // Access individual columns using array keys
    $_SESSION['customer_id'] = $row['CustomerID'];
    $_SESSION['first_name'] = $row['Fname'];
    $_SESSION['middle_name'] = $row['Mname'];
    $_SESSION['last_name'] = $row['Lname'];
    $_SESSION['username'] = $row['Username'];
    $_SESSION['birthday'] = $row['Birthday'];
    $_SESSION['contact_number'] = $row['ContactNum'];
    $_SESSION['address'] = $row['UserAddress'];
    $_SESSION['gender'] = $row['Gender'];
    header('Location: index.php');
    }
    }  else {
    // User does not exist or invalid login credentials
    header ("Location: login.php?error=Invalid login credentials. Try again.");
    }
?>