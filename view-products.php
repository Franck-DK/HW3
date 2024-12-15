
<div class="row">
  <div class="col">
    <h1>Make</h1>
  </div>
  <div class="col-auto">    
    <?php include "view-products-newform.php"; ?>
  </div>
</div>

<div class="container mt-4">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while ($product = $products->fetch_assoc()) { ?>
      <div class="col">
        <div class="card h-100 shadow">
          <!-- Placeholder Image -->
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">Make: <?php echo htmlspecialchars($product['product_name']); ?></h5>
            <p class="card-text">
              <strong>Description:</strong> <?php echo htmlspecialchars($product['product_description']); ?>
            </p>
            <p class="card-text">
              <strong>Avg Repair Cost:</strong> $<?php echo number_format($product['unit_price'], 2); ?>
            </p>
          </div>
          <div class="card-footer d-flex justify-content-between">
            <!-- Edit Button -->
            <div>
              <?php include "view-products-editform.php"; ?>
            </div>
            <!-- Delete Button -->
            <form method="post" action="">
              <input type="hidden" name="pid" value="<?php echo $product['product_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

