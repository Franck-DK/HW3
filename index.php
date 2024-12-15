
<?php
$pageTitle = "Home";
include "view-header.php";
?>

<div class="container mt-5">
  <div class="row align-items-center">
    <!-- Text Section -->
    <div class="col-md-6">
      <h1 class="display-4 fw-bold">Welcome to Car Dealership Management</h1>
      <p class="lead">Streamline your dealership operations with our all-in-one management system. From tracking your inventory to managing customers and generating insightful reports, we've got you covered. This website serves to present to you a sample of what our system implementation would look like for your auction company.</p>
      <ul class="list-unstyled">
        <li><i class="bi bi-check-circle-fill text-success"></i> Manage your car inventory efficiently</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> Track dealership performance</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> Enhance customer satisfaction</li>
      </ul>
      <a href="products.php" class="btn btn-primary btn-lg mt-3">Explore Our Cars</a>
    </div>
    
    <!-- Image Section -->
    <div class="col-md-6">
      <img src="Car-dealership.jpg" alt="Car Dealership" class="img-fluid rounded shadow">
    </div>
  </div>
</div>

<div class="container mt-5 text-center">
  <h2>Why Choose Us?</h2>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Inventory Tracking</h5>
          <p class="card-text">Easily monitor and manage your car inventory with up-to-date listings and detailed reports.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Customer Management</h5>
          <p class="card-text">Maintain customer relationships, track purchases, and offer personalized services.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Performance Insights</h5>
          <p class="card-text">Generate insightful analytics and reports to improve your dealership's performance.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "view-footer.php";
?>

