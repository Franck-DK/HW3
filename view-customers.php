<h1>Customers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone</th>
      <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($customer = $customers->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $customer['customer_id']; ?></td>
    <td><?php echo $customer['customer_firstname']; ?></td>
    <td><?php echo $customer['customer_lastname']; ?></td>
    <td><?php echo $customer['phone']; ?></td>
    <td><?php echo $customer['email']; ?></td>
     <td><form method="post" action="orders-by-customers.php">
      <input type="hidden" name="cid" value="<?php echo $customer['customer_id']; ?>">
      <button type="submit" class="btn btn-primary">Orders</button>
    </form></td>
  </tr>    
<?php
}
?>
    </tbody>
  </table>
</div>
