<?php
    $fullname = $_POST['full-name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];
    $fname = ucwords($fullname);
    $messages = ucfirst($message);

    $conn = new mysqli('localhost', 'root', '', 'hmviganrsdb');
    if ($conn->connect_error) {
        die('Connection failed: ' .$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into messages(full_name, email, message) values(?, ?, ?)");
        $stmt->bind_param("sss", $fname, $email_address, $messages);
        $stmt->execute();
        header("Location: contact.php?success=Your message has been sent!");
        $stmt->close();
        $conn->close();
    }
?>