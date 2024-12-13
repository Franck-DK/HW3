<div class="row">
  <div class="col">
    <h1>Products</h1>
  </div>
  <div class="col-auto">    
    <?php
include "view-products-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Unit Price</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($product = $products->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $product['product_id']; ?></td>
    <td><?php echo $product['product_name']; ?></td>
    <td><?php echo $product['product_description']; ?></td>
    <td><?php echo $product['unit_price']; ?></td>
  </tr>    
<?php
}
?>
    </tbody>
  </table>
</div>
