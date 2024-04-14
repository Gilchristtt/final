<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Include database connection file
include_once "../settings/connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    
    // Validate form data
    if (empty($productName) || empty($productPrice)) {
        echo "Both name and price fields are required";
        exit();
    }
    
    // Set a static image path (ensure this file exists on your server)
    $staticImagePath = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shell.com.gh%2Fmotorists%2Foils-lubricants%2Fhelix-for-cars.html&psig=AOvVaw0Xm2lGIT1gLheUTbBtF0tx&ust=1713209370082000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCMCFyrK4woUDFQAAAAAdAAAAABAE";

    // Insert product data into the database
    $sql = "INSERT INTO Products (name, price, image_url) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Error in preparing SQL statement: " . $conn->error;
        exit();
    }
    
    $stmt->bind_param("sds", $productName, $productPrice, $staticImagePath);
    if ($stmt->execute()) {
        header("Location: ../admin.php?msg=Product added sucessfully"); // Redirect to admin page
        exit();
    } else {
        echo "Error executing SQL statement: " . $stmt->error;
    }
} else {
    // If the form wasn't submitted properly, redirect back to the admin page
    header("Location: ../admin.php?msg=Error");
    exit();
}

