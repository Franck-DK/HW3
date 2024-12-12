<h1>Orders by Store</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>DateTime</th>
      <th>Status</th>
      <th>Customer ID</th>
      <th>Store ID</th>
        <th>Quantity</th>
        <th>Total Amount</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($order = $orders->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $order['order_id']; ?></td>
    <td><?php echo $order['order_datetime']; ?></td>
    <td><?php echo $order['order_status']; ?></td>
    <td><?php echo $order['customer_id']; ?></td>
    <td><?php echo $order['store_id']; ?></td>
    <td><?php echo $order['quantity']; ?></td>
    <td><?php echo $order['totalamount']; ?></td>
  </tr>    
<?php
}
?>
    </tbody>
  </table>
</div>
