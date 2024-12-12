<h1>Stores</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($store = $stores->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $store['store_id']; ?></td>
    <td><?php echo $store['store_name']; ?></td>
    <td><?php echo $store['location']; ?></td>
    <td><form method="post" action="orders-by-stores.php">
      <input type="hidden" name="oid" value="<?php echo $order['order_id']; ?>">
      <button type="submit" class="btn btn-primary">Orders</button>
    </form></td>
    <td><a href="products-by-stores.php?id=<?php echo $store['store_id']; ?>">Products</a></td>
  </tr>    
<?php
}
?>
    </tbody>
  </table>
</div>
