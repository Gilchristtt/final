<?php
// Include your database connection file
include_once "../settings/connection.php"; // Adjust the path as needed

// Function to fetch and display services
function displayServices($conn) {
    // Query to fetch services from the database
    $sql = "SELECT * FROM Services";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Loop through each row in the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Extract service details from the row
            $serviceName = $row['service_name'];
            $serviceDescription = $row['description'];
            $servicePrice = $row['price'];

            // Generate HTML for each service
            echo '<div class="col-md-6 col-lg-3 ftco-animate">';
            echo '<div class="block-7">';
            echo '<div class="text-center">';
            echo '<span class="excerpt d-block">' . $serviceName . '</span>';
            echo '<span class="price"><sup>$</sup> <span class="number">' . $servicePrice . '</span></span>';
            echo '<div class="pricing-text">';
            echo '<p>' . $serviceDescription . '</p>';
            echo '</div>';
            echo '<a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
        }
    } else {
        echo "No services found.";
    }
}



// Function to fetch and display services in a different structure
function displayServicesInDifferentStructure($conn) {
    // Query to fetch services from the database
    $sql = "SELECT * FROM Services";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Loop through each row in the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Extract service details from the row
            $serviceName = $row['service_name'];
            $serviceDescription = $row['description'];

            // Generate HTML for each service in the new structure
            echo '<div class="d-block d-flex">';
            echo '<div class="icon d-flex justify-content-center align-items-center">';
            echo '<span class="flaticon-car-service"></span>';
            echo '</div>';
            echo '<div class="media-body pl-3">';
            echo '<h3 class="heading">' . $serviceName . '</h3>';
            echo '<p>' . $serviceDescription . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No services found.";
    }
}

// Call the function to display services in the new structure

// Function to get services and generate dropdown options
function generateServiceOptions() {
    global $conn; // Access the global database connection object
    
    // Fetch all services from the database
    $sql = "SELECT service_id, service_name FROM Services";
    $result = $conn->query($sql);

    // Check if there are any services
    if ($result->num_rows > 0) {
        // Start building the dropdown options
        $options = '<option value="">Select services</option>';
        
        // Loop through each row to fetch service names and IDs
        while($row = $result->fetch_assoc()) {
            $service_id = $row['service_id'];
            $service_name = $row['service_name'];
            // Add each service as an option with both name and ID
            $options .= "<option value='$service_id'>$service_name</option>";
        }
    } else {
        $options = '<option value="">No services available</option>';
    }

    // Return the generated options
    return $options;
}






