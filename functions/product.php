<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Include the database connection file
include '../settings/connection.php';
function generateProductHTML($conn) {
    $sql = "SELECT * FROM Products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ob_end_clean(); // Move this line inside the loop
            echo '
                <div class="product">
                    <img src="' . $row["image_url"] . '" alt="' . $row["name"] . '">
                    <h4>' . $row["name"] . '</h4>
                    <p>GH₵' . $row["price"] . '</p> <!-- Append "GH₵" here -->
                    <button>Add to Cart</button>
                </div>
            ';
        }
    } else {
        echo "0 results";
    }
}

// Call the function to generate product HTML
generateProductHTML($conn);