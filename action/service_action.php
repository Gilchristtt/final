<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include '../settings/connection.php'; // Update with your actual database connection file

    // Define variables and initialize with empty values
    $serviceName = $serviceDescription = $servicePrice = "";

    // Processing form data when form is submitted
    $serviceName = $_POST['serviceName'];
    $serviceDescription = $_POST['serviceDescription'];
    $servicePrice = $_POST['price'];

    // Prepare an INSERT statement
    $sql = "INSERT INTO Services (service_name, description, price) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssd", $serviceName, $serviceDescription, $servicePrice);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to another page with success message
            header("Location: ../admin.php?msg=Service added successfully");
            exit(); // Don't forget to call exit() after header()
        } else {
            // Redirect to another page with error message
            header("Location: ../admin.php?msg=Error: " . urlencode($conn->error));
            exit();
        }

        // Close statement
        $stmt->close();
    } else {
        // Redirect to another page with error message
        header("Location: ../admin.php?msg=Error: " . urlencode($conn->error));
        exit();
    }

    // Close connection
    $conn->close();
}
