<?php
// Include database connection file
include_once "./settings/connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    
    // Validate form data (you can add more validation if needed)
    if (empty($productName) || empty($productDescription) || empty($productPrice)) {
        echo "All fields are required";
        exit();
    }
    
    // Handle file upload
    $targetDirectory = "uploads/"; // Adjust the directory path accordingly
    $targetFile = $targetDirectory . basename($_FILES["productImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["productImage"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["productImage"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $targetFile)) {
            // Insert product data into the database
            $sql = "INSERT INTO Products (name, description, price, image_url) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            
            // Check if the prepare statement succeeded
            if ($stmt === false) {
                echo "Error in preparing SQL statement: " . $conn->error;
                exit();
            }
            
            // Bind parameters
            $stmt->bind_param("ssds", $productName, $productDescription, $productPrice, $targetFile);
            
            // Execute the statement
            if ($stmt->execute()) {
                header("Location: admin.php"); // Redirect to admin page
                exit();
            } else {
                echo "Error executing SQL statement: " . $stmt->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // If the form wasn't submitted properly, redirect back to the admin page
    header("Location: admin.php");
    exit();
}
?>
