<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include 'connection.php'; // Update with your actual database connection file

    // Define variables and initialize with empty values
    $serviceName = $serviceDescription = $servicePrice = "";

    // Processing form data when form is submitted
    $serviceName = $_POST["serviceName"];
    $serviceDescription = $_POST["serviceDescription"];
    $servicePrice = $_POST["servicePrice"];

    // Prepare an INSERT statement
    $sql = "INSERT INTO Services (service_name, description, price) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssd", $serviceName, $serviceDescription, $servicePrice);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Service added successfully
            echo "Service added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
}
?>
