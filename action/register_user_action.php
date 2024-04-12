<?php
// register_user_action.php

// Include database connection file
include_once "../settings/connection.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRetype = $_POST['passwordRetype'];
    $role_id = 3; // Assuming $role_id is an integer
    
    // Validate form data
    if (empty($userName) || empty($email) || empty($password) || empty($passwordRetype)) {
        echo "All fields are required";
        exit();
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }
    
    // Check if passwords match
    if ($password !== $passwordRetype) {
        echo "Passwords do not match";
        exit();
    }
    
    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO Users (username, email, password, role_id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Check if the prepare statement succeeded
    if ($stmt === false) {
        echo "Error in preparing SQL statement: " . $conn->error;
        exit();
    }
    
    // Bind parameters
    $stmt->bind_param("sssi", $userName, $email, $hashedPassword, $role_id);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../login.php");
        exit();
    } else {
        echo "Error executing SQL statement: " . $stmt->error;
    }
} else {
    // If the form wasn't submitted properly, redirect back to the registration page
    header("Location: register.php");
    exit();
}
