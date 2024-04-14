<?php
// Include the database connection file
include './settings/connection.php';

function getProducts() {
    global $conn;  // Ensure your database connection variable is accessible

    // Define the query to fetch product data
    $sql = "SELECT product_id, name, image_url, price FROM Products";
    
    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Execute the query
        $stmt->execute();
        
        // Bind the results to variables
        $stmt->bind_result($id, $name, $image_url, $price);
        
        // Fetch all the results
        $productsHTML = '';
        while ($stmt->fetch()) {
            // For each product, create the HTML structure
            $productsHTML .= "<div class=\"product\">\n";
            $productsHTML .= "    <img src=\"" . htmlspecialchars($image_url) . "\" alt=\"" . htmlspecialchars($name) . "\">\n";
            $productsHTML .= "    <p>" . htmlspecialchars($name) . "</p>\n";
            $productsHTML .= "    <p class=\"price\">$" . number_format($price, 2) . "</p>\n";
            $productsHTML .= "</div>\n";
        }

        // Close the statement
        $stmt->close();

        // Return the complete HTML for all products
        return $productsHTML;
    } else {
        return "Error: " . $conn->error;
    }
}

// Use the function

