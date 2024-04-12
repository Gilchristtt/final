<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include './settings/connection.php';
include './settings/core.php';

// Check if the submit button is clicked
if (isset($_POST["submitx"])) {
    // Collect form data
    $service_id = $_POST['service'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['appointment_date'];
    $time = $_POST['appointment_time'];
    $message = $_POST['message'];

    if (empty($service_id) || empty($name) || empty($phone) || empty($date) || empty($time)) {
        // Redirect back to the form page with an error message
        ob_end_clean(); // Flush the output buffer
        header("Location: contact.php?msg=Please fill in all required fields.");
        exit();
    } else {
        // Check if user_id is set in the session
        if (!isset($_SESSION['user_id'])) {
            // Redirect to login page if user is not logged in
            header("Location: login.php");
            exit();
        }

        // Get user_id from the session
        $user_id = $_SESSION['user_id'];

        // Prepare the SQL statement to insert into Bookings table
        $sql = "INSERT INTO Bookings (service_id, user_id, name, phone, appointment_date, appointment_time, message)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        // Prepare and bind parameters to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iisssss", $service_id, $user_id, $name, $phone, $date, $time, $message);

        if ($stmt->execute()) {
            // Redirect back to the form page with a success message
            ob_end_clean(); // Flush the output buffer
            header("Location: contact.php?msg=Booking submitted successfully.");
            exit();
        } else {
            // Redirect back to the form page with an error message
     
            header("Location: contact.php?msg=Error: " . $sql . "<br>" . $conn->error);
            exit();
        }
    }
}
