<select class="form-select" id="pid" name="pid">
  <?php
while($productItem = $productList->fetch_assoc()) {
?>
    <option value="<?php echo $productItem['product_id']; ?>"><?php echo $productItem['product_id']; ?></option>
<?php  
}
?>

</select>
