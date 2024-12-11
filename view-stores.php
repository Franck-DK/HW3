<h1>Stores</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
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
  </tr>    
<?php
}
?>
    </tbody>
  </table>
</div>
