<?php
function selectProductsByStores($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT distinct p.product_id, p.product_name, p.product_description, p.unit_price, i.store_id FROM products p JOIN inventory i ON p.product_id = o.product_id WHERE i.store_id=?");
        $stmt->bind_param("i", $sid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
