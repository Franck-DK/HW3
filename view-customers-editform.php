<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCustomerModal<?php echo $customer['customer_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editCustomerModal<?php echo $customer['customer_id']; ?>" tabindex="-1" aria-labelledby="editCustomerModalLabel<?php echo $customer['customer_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editCustomerModalLabel<?php echo $customer['customer_id']; ?>">Edit Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="post" action="">
            <div class="mb-3">
              <label for="cfname<?php echo $customer['customer_id']; ?>" class="form-label">Customer FirstName</label>
              <input type="text" class="form-control" id="cfname<?php echo $customer['customer_id']; ?>" name="cfname" value="<?php echo $customer['customer_firstname']; ?>">
            </div>
          <div class="mb-3">
              <label for="clname<?php echo $customer['customer_id']; ?>" class="form-label">Customer LastName</label>
              <input type="text" class="form-control" id="clname<?php echo $customer['customer_id']; ?>" name="clname" value="<?php echo $customer['customer_lastname']; ?>">
            </div>
          <div class="mb-3">
              <label for="cphone<?php echo $customer['customer_id']; ?>" class="form-label">Phone</label>
              <input type="text" class="form-control" id="cphone<?php echo $customer['customer_id']; ?>" name="cphone" value="<?php echo $customer['phone']; ?>">
            </div>
          <div class="mb-3">
              <label for="cemail<?php echo $customer['customer_id']; ?>" class="form-label">Email</label>
              <input type="text" class="form-control" id="cemail<?php echo $customer['customer_id']; ?>" name="cemail" value="<?php echo $customer['email']; ?>">
            </div>
          
         <input type="hidden" name="cid" value="<?php echo $customer['customer_id']; ?>">
         <input type = "hidden" name="actionType" value="Edit">
            <button type="submit" class="btn btn-primary">Save</button>
</form>
      </div>
    </div>
  </div>
</div>
