<?php
    session_start();
    
    $connect = new PDO("mysql:host=localhost;dbname=hmviganrsdb",'root', '');
    $fname = $_POST['first_name'];
    $firstname = ucwords($fname);
    $mname = $_POST['middle_name'];
    $middlename = ucwords($mname);
    $lname = $_POST['last_name'];
    $lastname = ucwords($lname);
    $username = $_POST['user_name'];
    $birthdate = $_POST['birth_date'];
    $email = $_POST['email_address'];
    $contactnumber = $_POST['contact_number'];
    $ad = $_POST['address'];
    $address = ucwords($ad);
    $gender = $_POST['gender'];

    $connect = new PDO("mysql:host=localhost;dbname=hmviganrsdb",'root', '');
    $query = "UPDATE customer SET
            Fname = :fname, 
            Mname = :mname,
            Lname = :lname,
            Username = :username,
            Birthday = :birthdate,
            email_address = :email,
            ContactNum = :contactnumber,
            UserAddress = :ad,
            Gender = :gender
            WHERE CustomerID = :id";

try {           
    $statement = $connect->prepare($query);

    // Bind the values to the named placeholders
    $statement->bindValue(':fname', $firstname);
    $statement->bindValue(':mname', $middlename);
    $statement->bindValue(':lname', $lastname);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':birthdate', $birthdate);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':contactnumber', $contactnumber);
    $statement->bindValue(':ad', $address);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':id', $_SESSION['customer_id']);

    // Execute the query
    $statement->execute();

    // Check the number of affected rows
    $affectedRows = $statement->rowCount();

    if ($affectedRows > 0) {
        header("Location: index.php?success=Your information has been updated successfully!");
    } else {
        echo "No rows updated.";
    }
} catch (PDOException $e) {
    echo "Error: " .$e->getMessage();
}
?>