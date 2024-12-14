<select class="form-select" id="pid" name="pid">
  <?php
while($productItem = $productList->fetch_assoc()) {
  $selText ="";
  if($selectedProduct == $productItem['product_id']){
    $selText = "selected";
  }
?>
    <option value="<?php echo $productItem['product_id']; ?>"<?=$selText?>><?php echo $productItem['product_name']; ?></option>
<?php  
}
?>

</select>
