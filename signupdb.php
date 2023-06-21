<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $fname = ucwords($first_name);
    $lname = ucfirst($last_name);

    $conn = new mysqli('localhost', 'root', '', 'hmviganrsdb');
    if ($conn->connect_error) {
        die('Connection failed: ' .$conn->connect_error);
    }
    else {
        if ($password == $confirm_password) {
            $stmt = $conn->prepare("insert into customer(Fname, Lname, Birthday, email_address, password)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $birth_date, $email_address, $password);
        $stmt->execute();
        header("Location: login.php");
        $stmt->close();
        $conn->close();
        }   
        else {
        header ("Location: signup.php?error=The confirmation password does not match");
        }
    }
?>  