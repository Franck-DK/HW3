<h1>Products with Stores</h1>

<div class="card-group">
<?php
while ($product = $products->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
          <?php
          $stores = selectStoresByProducts($product['product_id']);
          while ($store = $stores->fetch_assoc()) {
          ?>
            <li class="list-group-item"><h5>Store ID: <?php echo $store['store_id']; ?></h5></li>
            <li class="list-group-item">Store Name: <?php echo $store['store_name']; ?></li>
            <li class="list-group-item">Location: <?php echo $store['location']; ?></li>
            <li class="list-group-item">Quantity: <?php echo $store['total_quantity']; ?></li>
          <?php
          }
          ?>
        </ul>
      </p>
      <p class="card-text">
        <small class="text-body-secondary">
          Description: <?php echo $product['product_description']; ?>
        </small>
      </p>
    </div>
  </div>
<?php
}
?>
</div>

