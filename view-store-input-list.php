<select class="form-select" id="sid" name="sid">
  <?php
while($storeItem = $storeList->fetch_assoc()) {
?>
    <option value="<?php echo $storeItem['store_id']; ?>"><?php echo $storeItem['store_name']; ?></option>
<?php  
}
?>

</select>
