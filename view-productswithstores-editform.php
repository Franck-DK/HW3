<!-- Debug the $store array -->
<pre><?php print_r($store); ?></pre>

<!-- Form Rendering -->
<form method="post" action="">
    <div class="mb-3">
        <label for="pid<?php echo $store['inventory_id']; ?>" class="form-label">Product ID</label>
        <input type="text" class="form-control" id="pid<?php echo $store['inventory_id']; ?>" 
               name="pid" value="<?php echo isset($store['product_id']) ? $store['product_id'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="sid<?php echo $store['inventory_id']; ?>" class="form-label">Store ID</label>
        <input type="text" class="form-control" id="sid<?php echo $store['inventory_id']; ?>" 
               name="sid" value="<?php echo isset($store['store_id']) ? $store['store_id'] : ''; ?>">
    </div>
</form>

