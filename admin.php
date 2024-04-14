<?php
include './settings/core.php';
include './settings/connection.php';
include './functions/get_services.php';
checkLogin();
if($_SESSION['role_id']!=1){
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fita Admin</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color:#343a40; /* Light grey background */
      color:orange; /* Dark grey font color */
      padding-top: 56px; /* Adjusted padding for fixed navbar */
    }
    .container-fluid {
      padding: 20px; /* Add some padding to content */
    }
    .btn-primary,
    .btn-secondary {
      background-color: #6c757d; /* Dark grey button color */
      border-color: #6c757d; /* Dark grey border color */
    }
    .btn-primary:hover,
    .btn-secondary:hover {
      background-color: #495057; /* Darker grey hover color */
      border-color: #495057; /* Darker grey border hover color */
    }
    .card {
      margin-bottom: 20px; /* Add space between cards */
      border: none; /* Remove card border */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add subtle box-shadow */
    }
    .card-header {
      background-color: #f8f9fa; /* Light grey card header */
      border-bottom: 1px solid rgba(0, 0, 0, 0.125); /* Add border-bottom to card header */
    }
    .card-body {
      padding: 20px; /* Add padding to card body */
    }
    .card-title {
      margin-bottom: 20px; /* Add space below card title */
    }
    .table {
      background-color: #fff; /* White background for tables */
      border-radius: 5px; /* Add border radius to tables */
    }
    .table th,
    .table td {
      border-top: none; /* Remove top border from table cells */
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: orange;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:history.go(-1);" style="color: orange;">Back</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color: orange;">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




  <!-- Content -->
  <div class="container-fluid">
    <h2 class="mb-4">Fita Admin</h2>

    <!-- Cards for different sections -->
    <div class="row">
      <!-- Services -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Services</h5>
          </div>
          <div class="card-body">
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addServiceModal">Add Service</button>
            <table class="table">
              <!-- Table content for services -->
            </table>
            <!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addServiceModalLabel">Add Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to add service -->
        <form action="action/service_action.php" id="addServiceForm>
          <div class="form-group">
            <label for="serviceName">Service Name</label>
            <input type="text" class="form-control" id="serviceName" name="serviceName">
          </div>
          <div class="form-group">
            <label for="serviceDescription">Description</label>
            <textarea class="form-control" id="serviceDescription" name="serviceDescription"></textarea>
          </div>
          <button type="submit"  class="btn btn-primary" id="addServiceBtn">Save changes</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to handle form submission -->
<script>
  $(document).ready(function(){
    // Add Service Form Submission
    $('#addServiceBtn').click(function(){
      // Fetch data from form
      var serviceName = $('#serviceName').val();
      var serviceDescription = $('#serviceDescription').val();
      var servicePrice = $('#servicePrice').val();

      // AJAX request to add service to database
      $.ajax({
        url: 'add_service.php',
        type: 'POST',
        data: {
          serviceName: serviceName,
          serviceDescription: serviceDescription,
          servicePrice: servicePrice
        },
        success: function(response){
          // Handle success response
          alert(response); // You can customize this based on your requirements
          // Clear form fields
          $('#serviceName').val('');
          $('#serviceDescription').val('');
          $('#servicePrice').val('');
          // Close modal
          $('#addServiceModal').modal('hide');
          // Reload service table or update dynamically using AJAX
          // Example: $('#serviceTable tbody').html(response);
        },
        error: function(xhr, status, error){
          // Handle error response
          console.error(error);
        }
      });
    });
  });
</script>

          </div>
        </div>
      </div>

      
      <!-- Tips -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Tips on Vehicle Maintenance</h5>
          </div>
          <div class="card-body">
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addTipModal">Add Tip</button>
            <table class="table">
              <!-- Table content for tips -->
            </table>
          </div>
        </div>
      </div>
      <!-- Testimonials -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Customer Testimonials</h5>
          </div>
          <div class="card-body">
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addTestimonialModal">Add Testimonial</button>
            <table class="table">
              <!-- Table content for testimonials -->
            </table>
          </div>
        </div>
      </div>
    </div>

   <!-- Products Management Section -->
 <div class="mb-5">
      <h4>Products Management</h4>
      <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Add Product</button>
      <!-- Table to display products -->
      <table class="table mt-3">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Table rows with product details -->
          <!-- Example: <tr><td>Product 1</td><td>Description of Product 1</td><td>$50</td><td>Edit | Delete</td></tr> -->
          <!-- PHP code to fetch products from database and populate the table goes here -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modals for adding, updating, and removing products -->

 <!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form to add product -->
        <form id="addProductForm" enctype="multipart/form-data" action=product_action.php> <!-- enctype for file upload -->
          <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" class="form-control" id="productName" name="productName">
          </div>
          <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
          </div>
          <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice">
          </div>
          <div class="form-group">
            <label for="productImage">Image</label>
            <input type="file" class="form-control-file" id="productImage" name="productImage">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addProductBtn">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <!-- Update Product Modal -->
  <div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="updateProductModalLabel" aria-hidden="true">
    <!-- Similar structure as the Add Product Modal -->
  </div>

  <!-- Remove Product Modal -->
  <div class="modal fade" id="removeProductModal" tabindex="-1" role="dialog" aria-labelledby="removeProductModalLabel" aria-hidden="true">
    <!-- Similar structure as the Add Product Modal -->
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Your custom script to handle form submission, data retrieval, etc. -->
  <script>
    // Add your JavaScript code here to handle form submission, AJAX requests, etc.
    $(document).ready(function(){
      // Add Product Form Submission
      $('#addProductBtn').click(function(){
        // Fetch data from form
        var productName = $('#productName').val();
        var productDescription = $('#productDescription').val();
        var productPrice = $('#productPrice').val();

        // AJAX request to add product to database
        $.ajax({
          url: 'add_product.php',
          type: 'POST',
          data: {
            productName: productName,
            productDescription: productDescription,
            productPrice: productPrice
          },
          success: function(response){
            // Handle success response
            alert(response); // You can customize this based on your requirements
            // Clear form fields
            $('#productName').val('');
            $('#productDescription').val('');
            $('#productPrice').val('');
            // Close modal
            $('#addProductModal').modal('hide');
            // Reload product table or update dynamically using AJAX
            // Example: $('#productTable tbody').html(response);
          },
          error: function(xhr, status, error){
            // Handle error response
            console.error(error);
          }
        });
      });
    });
  </script>

</body>
</html>
