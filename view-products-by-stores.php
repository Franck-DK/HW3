<h1>Products by Store</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Unit Price</th>
      <th>Store ID</th>
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
    <td><?php echo $product['store_id']; ?></td>
  </tr>    
<?php
}
?>
    </tbody>
  </table>
</div>
