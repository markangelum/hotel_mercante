<?php
    $first_name = $_POST['firstname'];
	$middle_name = $_POST['middlename'];
    $last_name = $_POST['lastname'];
    $email_address = $_POST['email'];
    $contactnumber = $_POST['contactnum'];
    $room = $_POST['rooms'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
    $fname = ucwords($first_name);
	$mname = ucfirst($middle_name);
    $lname = ucfirst($last_name);

    $conn = new mysqli('localhost', 'root', '', 'hmviganrsdb');
    if ($conn->connect_error) {
        die('Connection failed: ' .$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into reservation_history(first_name, middle_name, last_name, email, contact_number,
			room_type, check_in, check_out)
        values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $fname, $mname, $lname, $email_address, $contactnumber, $room, $checkin, $checkout);
        $stmt->execute();
        header("Location: history.php");
        $stmt->close();
        $conn->close();
        } 
?>